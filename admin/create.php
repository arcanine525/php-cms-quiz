<?php include("includes/header.php"); ?>
<?php session_start(); ?>
<?php 

if(isset($_POST['submit'])){
    $title_quiz = $_POST['title_quiz'];
    $quiz_content = $_POST['quiz_content'];
    $cat_id = $_POST['cat_id'];
    $quiz_image = $_FILES['quiz_image']['name'];
    $quiz_image_temp = $_FILES['quiz_image']['tmp_name'];
    $_SESSION['quiz_title'] = $title_quiz;
    $_SESSION['quiz_content'] = $quiz_content;
    $_SESSION['cat_id'] = $cat_id;

    $_SESSION['level_id'] = $_POST['level_id'];

    move_uploaded_file($quiz_image_temp, "quiz-images/$quiz_image");
    $_SESSION['quiz_image'] = $quiz_image;
    header("Location: add_quiz.php");
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
                    
                    
                    <form action="" method="post" enctype="multipart/form-data">  
                            <h1 class="page-header">
                                Create your own quiz
                            </h1>

                            <div class="form-group">
                                <label for="title_quiz">Quiz Title</label>
                                <input type="text" class="form-control" name="title_quiz">
                            </div>
                            
                            <!-- Category -->
                            <div class="form-group">
                                <label for="cat_id">Select category: </label>
                                <select name="cat_id" id="cat_id">
<?php 
$query = "SELECT * FROM category";
$category = $mysqli->query($query) or die($mysqli->error.__Line__);

while ($row = mysqli_fetch_assoc($category)){
    $cat_id = $row['id'];
    $cat_title = $row['name'];
    echo "<option value='{$cat_id}'>{$cat_title}</option>";
}
?>
                                </select>
                            </div>

                            <!-- Level -->
                            <div class="form-group">
                                <label for="level_id">Select level: </label>
                                <select name="level_id" id="level_id">
<?php 
$query = "SELECT * FROM levels";
$levels = $mysqli->query($query) or die($mysqli->error.__Line__);

while ($row = mysqli_fetch_assoc($levels)){
    
    $level_id = $row['id'];
    $level = $row['name'];
    echo "<option value='{$level_id}'>{$level}</option>";
}
?>
                                </select>
                            </div>

                            <div class="form-group">
                                 <label for="quiz_content">Quiz Content</label>
                                 <textarea class="form-control "name="quiz_content" id="body" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-group">
                                  <label for="quiz_image">Quiz Image</label>
                                  <input type="file"  name="quiz_image">
                            </div> 
                            
                            <div class="form-group">
                                 <!-- <input type="submit" value="submit" name="submit"> -->
                                  <input class="btn btn-primary" type="submit" name="submit" value="Next">
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
