<?php include("admin/includes/database.php") ?>
<?php session_start(); ?>
<?php 


    //Set question number
    $number = (int) $_GET['n'];
    
    //Get Question
    $query = "SELECT * FROM questions WHERE question_number = $number";

    //Get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    $question = $result->fetch_assoc();

    //Get Choices
    $query = "SELECT * FROM choices WHERE question_number = $number";

    //Get result
    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

    //Get total number
    $query = "SELECT * FROM questions ";
    
    //Get result
    $results = $mysqli->query($query) or die($mysqli->error.__Line__);
    $total= $results->num_rows;

    
$query = "SELECT * FROM quiz WHERE question_number = '".$_GET['n']."' ";
$quiz_title_score = $mysqli->query($query) or die($mysqli->error.__Line__);
$row = mysqli_fetch_assoc($quiz_title_score);

//Nazwa quizu jako session
define("quiz_title_score" , $row['title']);

//$quiz_title_score = $row['title'];
$_SESSION['quiz_title_score'] = quiz_title_score;

$query = "SELECT * FROM quiz WHERE title = '".$_SESSION['quiz_title_score']."' ";
$results = $mysqli->query($query) or die($mysqli->error.__Line__);
$total_this= $results->num_rows;

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
            <h1><?php echo quiz_title_score; ?></h1>
        </div>
    </header>
    <main>
        <div class="container">
         <form action="" method="post">
            </form>
            <div class="current">
                Question <?php error_reporting(0); echo $_SESSION['current_question']+1 ?> of <?php echo $total_this ?>
            </div>
               
            <p class="question">
                <?php echo $question['text']; ?>
            </p>
            <form action="process.php" method="post">
                <ul class="choices">
                   <?php while($row = $choices->fetch_assoc()) : ?>

                    <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"> <?php echo $row['text'] ?> </li>
                    
                    <?php endwhile; ?>
                </ul>
                <input type="submit" name="submit" value="Submit">
                <input type="hidden" name="number" value="<?php echo $number; ?>">
                <!-- <label for="correct_choice">Username</label> -->
                <input type="hidden" class="form-control" name="user" value="<?php if(isset($_SESSION['user_name'])) echo $_SESSION['user_name']; ?>"> 
            </form>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; Project Q 2019
        </div>
    </footer>
</body>
</html>