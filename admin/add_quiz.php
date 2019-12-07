<?php include("includes/header.php") ?>
<?php session_start() ?>

<?php
if(isset($_POST['submit'])){
    
    //Get post variables
    // $question_number = $_POST['question_number'];
    // $question_text = $_POST['question_text'];
    // $correct_choice = $_POST['correct_choice'];
    // $quiz_title = $_POST['title'];
    // $quiz_category = $_POST['category'];
    $quiz_title = $_SESSION['quiz_title'];
    $quiz_category = $_SESSION['cat_id'];
    $quiz_level = $_SESSION['level_id'];
    $quiz_content =  $_SESSION['quiz_content'];
    $quiz_image = $_SESSION['quiz_image'];
    $answer = $_POST['answer'];
    
    
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

    //Set category name:
   $query_category = "SELECT name FROM category WHERE id='".$_SESSION['cat_id']."'";
   $category = $mysqli->query($query_category) or die($mysqli->error.__Line__);
   $row = $category->fetch_assoc();
   $_SESSION['cat_title'] = $row['name'];

    //Set level name:
   $query_level = "SELECT name FROM levels WHERE id='".$_SESSION['level_id']."'";
   $level = $mysqli->query($query_level) or die($mysqli->error.__Line__);
   $row = $level->fetch_assoc();

   $_SESSION['level'] = $row['name'];

  // Add quiz to database
  $query = "INSERT INTO quizzes(title, content, choice1, choice2, choice3, choice4, choice5, answer, category, level) VALUES ('$quiz_title', '$quiz_content', '$choices[1]', '$choices[2]', '$choices[3]', '$choices[4]', '$choices[5]','$answer', '$quiz_category', '$quiz_level')";
  $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
  header("Location: index.php");

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
                        <h3 class="page-header">
                            Add new question
                        </h3>
                        
                        
                        <form action="add_quiz.php" method="post" enctype="multipart/form-data">  
                            <div class="form-group">
                                <label for="title">Quiz Title</label>
                                <input disabled type="text" class="form-control" name="title" value="<?php echo $_SESSION['quiz_title']; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="cat_id">Quiz Category</label>
                                <input disabled type="text" class="form-control" name="category" value="<?php echo $_SESSION['cat_title']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="cat_id">Quiz level</label>
                                <input disabled type="text" class="form-control" name="level" value="<?php echo $_SESSION['level']; ?>">
                            </div>
                               
                            <!-- <div class="form-group">
                                <label for="title">Quiz Text</label>
                                <input type="text" class="form-control" name="question_text">
                            </div> -->

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
                                <!-- <label for="correct_choice">Correct Choice Number</label>
                                <input type="number" class="form-control" name="correct_choice"> -->

                                <label for="answer">Correct Choice Number</label>
                                <select id="answer" name="answer">
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                    <option value=3>3</option>
                                    <option value=4>4</option>
                                    <option value=5>5</option>
                                </select>
                            </div>
                                  
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Done" name="submit">
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