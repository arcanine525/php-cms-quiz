<?php include("admin/includes/database.php") ?>
<?php session_start(); ?>
<?php 
 
$username = $_SESSION['user_name_score'];
$quiz_title = $_SESSION['quiz_title_score'];

$sql = "SELECT user_id FROM quiz WHERE title='".$quiz_title."' ";
$result = $mysqli->query($sql); 
$row = $result->fetch_assoc();
$creator_id = $row['user_id'];



$query = "SELECT id FROM users WHERE username = '".$username."'";
$user_id_row = $mysqli->query($query) or die($mysqli->error.__Line__);
$row = mysqli_fetch_assoc($user_id_row);

$user_id = $row['id'];

$insert_query = "INSERT INTO result(question_title, creator_id, user_id, username, score) VALUES('$quiz_title','$creator_id','$user_id','".$_SESSION['user_name_score']."','".$_SESSION['score']."') ";
$insert_row = $mysqli->query($insert_query) or die($mysqli->error.__LINE__);
    
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Project Q</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><?php echo $_SESSION['quiz_title_score']; ?></h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>You're Done!</h2>
            <p>Congrats! you have completed the test</p>
            
            <p>Final Score: <?php echo $_SESSION['score']; ?></p>
            <a href="quiz.php" class="start">Go back</a>
            <?php 
            $_SESSION['score']=0;
            $_SESSION['current_question']=0;
            $username = '';
            $quiz_title = '';
            ?>
        </div>
    </main>
    <footer>
        <div class="container">
            copyright &copy; 2019, Project Q
        </div>
    </footer>
</body>
</html>