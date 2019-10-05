<?php include("includes/header.php") ?>
<?php session_start() ?>

<?php


if(isset($_POST['submit'])){
    
    //Get post variables
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];
    $quiz_title = $_POST['title'];
    $quiz_category = $_POST['category'];
    $quiz_content =  $_SESSION['quiz_content'];
    $quiz_image = $_SESSION['quiz_image'];
    
    
     //Get user ID
    $sql = "SELECT id FROM users WHERE username='".$_SESSION['user_name']."'";
    $result11 = $mysqli->query($sql); 
    $row = $result11->fetch_assoc();
    $user_id = $row['id'];
    
    //Choices array
    $choices = array();
    $choices[1] = $_POST['choice1'];
    $choices[2] = $_POST['choice2'];
    $choices[3] = $_POST['choice3'];
    $choices[4] = $_POST['choice4'];
    $choices[5] = $_POST['choice5'];
    
//    $query_category = "SELECT * FROM category WHERE cat_title = $quiz_category";
//    $category = $mysqli->query($query_category) or die($mysqli->error.__Line__);
//    $row = mysqli_fetch_assoc($category);
//    $cat_id = ['cat_id'];
//    
//    echo "<h1> {$cat_id} </h1>";
//    echo "<h1> {$quiz_category} </h1>";
    
    //Question query
    $query = "INSERT INTO questions(question_number, text) VALUES('$question_number','$question_text')";
    $query_quiz = "INSERT INTO quiz(question_number, title, category, content, quiz_image, user_id) VALUES ('$question_number','$quiz_title','$quiz_category' , '$quiz_content', '$quiz_image', '$user_id')";
    
    //Run query
    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $insert_row_quiz = $mysqli->query($query_quiz) or die($mysqli->error.__LINE__);
    
    //Validate insert przywieza czy nie ma pustyx miejsc
    if($insert_row){
        foreach($choices as $choice => $value){
            if($value != ''){
                if($correct_choice==$choice){
                    $is_correct=1;
                }else{
                    $is_correct=0;
                }
                //Choice query
                $query="INSERT INTO choices(question_number, is_correct, text) VALUES ('$question_number','$is_correct','$value')";
                
                //Run query
                $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
                
                if($insert_row){
                    continue;
                }else {
                    die('Error: ('.$mysqli-errno .')'. $mysqli_error);
                }
            }
        }
        $msg = 'Question has been added';
    }
}

//Get total number
$query = "SELECT * FROM questions ";

//Get result
$questions = $mysqli->query($query) or die($mysqli->error.__Line__);
$total= $questions->num_rows;

$next = $total+1;

if(isset($_POST['done'])){
    header("Location: index.php");
}

?>
   
   
    <div id="wrapper">

        <!-- Navigation -->
        
        <?php include("includes/navigation.php") ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add question
                        </h1>
                        
                        
                        <form action="add.php" method="post" enctype="multipart/form-data">  
                           
                            <div class="form-group">
                                <label for="question_number">Question Number</label>
                                <input type="number" value="<?php echo $next; ?>" name="question_number">
                            </div>

                            <div class="form-group">
                                <label for="title">Quiz Title</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $_SESSION['quiz_title']; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="cat_id">Quiz Category</label>
                                <input type="text" class="form-control" name="category" value="<?php echo $_SESSION['cat_title']; ?>">
                            </div>
                               
                            <div class="form-group">
                                <label for="title">Quiz Text</label>
                                <input type="text" class="form-control" name="question_text">
                            </div>

                            <div class="form-group">
                                <label for="choice1">Choice #1</label>
                                <input type="text" class="form-control" name="choice1">
                            </div>
                            
                            <div class="form-group">
                                <label for="choice2">Choice #2</label>
                                <input type="text" class="form-control" name="choice2">
                            </div>

                            <div class="form-group">
                                <label for="choice3">Choice #3</label>
                                <input type="text" class="form-control" name="choice3">
                            </div>

                            <div class="form-group">
                                <label for="choice4">Choice #4</label>
                                <input type="text" class="form-control" name="choice4">
                            </div>

                            <div class="form-group">
                                <label for="choice5">Choice #5</label>
                                <input type="text" class="form-control" name="choice5">
                            </div>

                            <div class="form-group">
                                <label for="correct_choice">Correct Choice Number</label>
                                <input type="number" class="form-control" name="correct_choice">
                            </div>
                            
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Next question" name="submit">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Done" name="done">
                            </div>
                            
                            
                        </form>
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
