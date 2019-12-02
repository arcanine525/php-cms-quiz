<?php include("admin/includes/database.php") ?>
<?php session_start(); ?>
<?php
    $query_topics = "SELECT * FROM category";
    
    $r_topics = $mysqli->query($query_topics) or die($mysqli->error.__Line__);

    while ($row = $r_topics->fetch_assoc()) {
        $topics[] = $row['name'];
    }
?>
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
<div>
  <form action="test.php">

    <label for="level">Select difficult: </label>
    <select id="level" name="level">
      <option value="easy">Easy</option>
      <option value="medium">Medium</option>
      <option value="hard">Hard</option>
    </select>

    <label for="topic">Select topic: </label>
    <select id="topic" name="level">
    <?php
    foreach($topics as $topic){
        echo "<option value=$topic>";
        echo $topic;
        echo "</option>";
    }
    ?>
      <!-- <option value="easy">Easy</option>
      <option value="medium">Medium</option>
      <option value="hard">Hard</option> -->
    </select>
  
    <input type="submit" value="Do the test">
  </form>
</div>
</body>