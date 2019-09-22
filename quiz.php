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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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

$query = "SELECT * FROM quiz GROUP BY title ORDER BY id";
$select_all_quizes = $mysqli->query($query) or die($mysqli->error.__LINE__);

while($row = mysqli_fetch_assoc($select_all_quizes)){
    $quiz_title = $row['title'];
    $quiz_number = $row['question_number'];
    $quiz_content = $row['content'];
    $user_id = $row['user_id'];
    $quiz_image = $row['quiz_image'];
    
    echo "<h2>  {$quiz_title} </h2>";
    
    $query = "SELECT * FROM users WHERE id='".$user_id."' ";
    $user_name = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $row_user = mysqli_fetch_assoc($user_name);
    $user_name_db = $row_user['username'];
    
    echo "<p class='lead'> by  {$user_name_db}  </p>";
    echo "<hr> <img class='img-responsive' src='admin/quiz-images/{$quiz_image}' alt=''><hr>";
    echo "<h3> Quiz content </h3> <br>";
    echo "<h4> {$quiz_content} <h4>";
    echo "<a class='btn btn-primary' href='question.php?n={$quiz_number}'>
    Challenge <span class='glyphicon glyphicon-chevron-right'></span></a> <hr>";
      
}
                
?>
                

                <!-- First Blog Post -->
                
                
                
                
                
                
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
               

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Quiz Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <?php
$query = "SELECT * FROM category";
$category = $mysqli->query($query) or die($mysqli->error.__Line__);

while ($row = mysqli_fetch_assoc($category)){

    //$cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
    echo "<li > <a href='category.php?category=$cat_title'>{$cat_title}</a> </li>";
    
}
                                ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Project Q 2019</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
