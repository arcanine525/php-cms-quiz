<?php include("admin/includes/database.php") ?>
<?php session_start(); ?>
<?php 

//check to see if score is set
if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}

if(!isset($_SESSION['current_question'])){
    $_SESSION['current_question'] = 0;
}

if($_POST){
    //wybiera numer z questions
    $number = $_POST['number'];

    //Username dla result
    $user_name = $_POST['user'];
    $_SESSION['user_name_score'] = $user_name;
    
    //wybiera choice z questions
    $selected_choice = $_POST['choice'];
    
    //Get total number
    $query = "SELECT * FROM questions";
    //$query = "SELECT * FROM quiz WHERE title = '".$_SESSION['quiz_title_score']."' ";
    
    //Get result
    $results = $mysqli->query($query) or die($mysqli->error.__Line__);
    $total= $results->num_rows;
    
    $next= $number+1;
    
    //Get correct choice
    
    $query = "SELECT * FROM choices WHERE question_number = $number AND is_correct = 1";
        
    //Get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    //Get row
    $row = $result->fetch_assoc();
    
    //Set correct choice
    $correct_choice = $row['id'];
    
    //Compare
    if($correct_choice == $selected_choice){
        //answer is correct
        $_SESSION['score']++;
        
    }
    if(isset($_POST['submit'])){
        $_SESSION['current_question'] ++ ;
    }
    
    $query = "SELECT * FROM quiz WHERE title = '".$_SESSION['quiz_title_score']."' ";
    $results = $mysqli->query($query) or die($mysqli->error.__Line__);
    $total_this= $results->num_rows;
    
    $_SESSION['total_questions'] = $total_this;
    
    //Check if last question
//    if($number==$total){
//        header("Location: final.php");
//        exit();
//    }else {
//        //redirect to second one
//        header("Location: question.php?n=".$next);
//    }
    
    if($_SESSION['current_question']==$total_this){
        header("Location: final.php");
        exit();
    }else {
        //redirect to second one
        header("Location: question.php?n=".$next);
    }
}

?>