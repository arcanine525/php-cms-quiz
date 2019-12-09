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
    <style>
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

    </style>
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
                <?php
                        // Get userid from cookie
                $user = $_COOKIE['username'];
                $query = "SELECT * FROM users WHERE username='".$user."' LIMIT 1";
                $result = $mysqli->query($query) or die($mysqli->error.__Line__);
                $row = $result->fetch_assoc();
                $privi = $row['privileges'];
                    // if($_SESSION['privi'] == 1)
                    if($privi == 1)
                        echo ' <a class="navbar-brand" href="admin/index.php">Admin</a>';
                ?>
                <a class="navbar-brand" href="home.php">Home</a>
                <a class="navbar-brand" href="#"><?php echo $_COOKIE['username']; ?></a>
                <a class="navbar-brand pull-right" href="logout.php">Log out</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <h1 class="page-header">Quizes</h1>
            <form action="results.php" method="POST" class="box-log-in">
<?php

$level = $_GET['level'];
$category = $_GET['topic'];
$number_quiz = 10;

$query = "SELECT * FROM quizzes WHERE category='".$category."' AND level='".$level."' ORDER BY RAND () LIMIT $number_quiz ";
$select_all_quizes = $mysqli->query($query) or die($mysqli->error.__LINE__);

//Render questions

echo "<ol>";
while($row = mysqli_fetch_assoc($select_all_quizes)){
    $quiz_id = $row['id'];
    $quiz_title = $row['title'];
    $quiz_content = $row['content'];
    // $user_id = $row['user_id'];
    // $quiz_image = $row['quiz_image'];

    // Choices:
    $choices = array();
    $choices[1] = $row['choice1'];
    $choices[2] = $row['choice2'];
    $choices[3] = $row['choice3'];
    $choices[4] = $row['choice4'];
    $choices[5] = $row['choice5'];

    echo "<h4><li>";
    echo "  {$quiz_title} </h4>";
    
    // $query = "SELECT * FROM users WHERE id='".$user_id."' ";
    // $user_name = $mysqli->query($query) or die($mysqli->error.__LINE__);
    // $row_user = mysqli_fetch_assoc($user_name);
    // $user_name_db = $row_user['username'];
    
    echo "<h5> {$quiz_content} <h5>";?>
                <ul style="list-style-type:none;">
                <input type="radio" name="<?php echo $quiz_id; ?>"" value="<?php echo $choices[1]; ?>" > <?php echo $choices[1] ?><br>
                <input type="radio" name="<?php echo $quiz_id; ?>"" value="<?php echo $choices[2]; ?>" > <?php echo $choices[2] ?><br>
                <input type="radio" name="<?php echo $quiz_id; ?>"" value="<?php echo $choices[3]; ?>" > <?php echo $choices[3] ?><br>
                <input type="radio" name="<?php echo $quiz_id; ?>"" value="<?php echo $choices[4]; ?>" > <?php echo $choices[4] ?><br>
                </ul>
                <!-- <label for="correct_choice">Username</label> -->
                <!-- <input type="hidden" class="form-control" name="user" value="<?php if(isset($_SESSION['user_name'])) echo $_SESSION['user_name']; ?>">  -->
                
            </form>
<?php
    echo "</li>";
      
} 
echo '<input type="submit" class="start">';
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
