<?php include("admin/includes/database.php") ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project Q</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin/index.php">Admin</a>
                <a class="navbar-brand" href="quiz.php">Home</a>
                <a class="navbar-brand" href="#"><?php echo $_SESSION['user_name']; ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            <h1 class="page-header">
                    Quizes
                    
                </h1>
<?php

$level = $_GET['level'];
$category = $_GET['topic'];

// Re-cofing db
if ($level == 'Hard'){
    $query = "SELECT * FROM quiz GROUP BY id ORDER BY RAND ()  LIMIT 10 ";
}else{
    $query = "SELECT * FROM quiz GROUP BY id ORDER BY RAND ()  LIMIT 5 ";
}


$select_all_quizes = $mysqli->query($query) or die($mysqli->error.__LINE__);

//Render questions
echo "<ol>";
while($row = mysqli_fetch_assoc($select_all_quizes)){
    $quiz_title = $row['title'];
    $quiz_number = $row['question_number'];
    $quiz_content = $row['content'];
    $user_id = $row['user_id'];
    $quiz_image = $row['quiz_image'];

    // Choices:
    $query_choices = "SELECT * FROM choices WHERE question_number = $quiz_number";
    $choices = $mysqli->query($query_choices) or die($mysqli->error.__LINE__);

    echo "<li>";
    echo "<h4>  {$quiz_title} </h4>";
    
    $query = "SELECT * FROM users WHERE id='".$user_id."' ";
    $user_name = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $row_user = mysqli_fetch_assoc($user_name);
    $user_name_db = $row_user['username'];
    
    // echo "<p class='lead'> by  {$user_name_db}  </p>";
    // echo "<hr> <img class='img-responsive' src='admin/quiz-images/{$quiz_image}' alt=''><hr>";
    // echo "<h4> Quiz content </h4> <br>";
    echo "<h5> {$quiz_content} <h5>";
    // echo "<a class='btn btn-primary' href='question.php?n={$quiz_number}'>
    // Challenge <span class='glyphicon glyphicon-chevron-right'></span></a> <hr>";
?>
            <form action="process.php" method="post">
                <ul style="list-style-type:none;">
                   <?php while($row = $choices->fetch_assoc()) : ?>

                    <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"> <?php echo $row['text'] ?> </li>
                    
                    <?php endwhile; ?>
                </ul>
                <input type="submit" name="submit" value="Submit">
                <input type="hidden" name="number" value="<?php echo $number; ?>">
                <!-- <label for="correct_choice">Username</label> -->
                <input type="hidden" class="form-control" name="user" value="<?php if(isset($_SESSION['user_name'])) echo $_SESSION['user_name']; ?>"> 
            </form>
<?php
    echo "</li>";
      
} 
echo "</ol>";             
?>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Project Q 2019</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
