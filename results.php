<?php include("admin/includes/database.php") ?>
<?php session_start(); ?>

<?php 
 function checkAns($q_id, $q_ans){
    $query = "SELECT answer FROM quizzes WHERE answer='".$q_ans."' LIMIT 1 ";
    $result = $mysqli->query($query) or die($mysqli->error.__Line__);

    if($result==$q_ans){
        return true;
    }
    else{
        return false;
    }
 }
    $score = 0;

    foreach ($_POST as $q_id => $q_ans) {
        
        // echo "Param: $q_id; Value: $q_ans<br />\n";

        $query = "SELECT * FROM quizzes WHERE id='".$q_id."' LIMIT 1 ";
        $result = $mysqli->query($query) or die($mysqli->error.__Line__);
        $row = $result->fetch_assoc();
        // Choices:
        $choices = array();
        $choices[1] = $row['choice1'];
        $choices[2] = $row['choice2'];
        $choices[3] = $row['choice3'];
        $choices[4] = $row['choice4'];
        $choices[5] = $row['choice5'];
        $ans = $choices[$row['answer']];
        // echo $ans = $choices[$row['answer']];
        // echo $q_ans;
        if($ans==$q_ans){
            $score = $score + 1;
        }
    }
    // Get userid from cookie
    $user = $_COOKIE['username'];
    $query = "SELECT * FROM users WHERE username='".$user."' LIMIT 1";
    $result = $mysqli->query($query) or die($mysqli->error.__Line__);
    $row = $result->fetch_assoc();
    $u_id = $row['id'];
    $t=time();
    // echo($t . "<br>");
    // echo(date("Y-m-d",$t));
    $curr_date = date("Y-m-d",$t);
    // Insert into results
    $query = "INSERT INTO result(user_id, score, time) VALUES ('$u_id', '$score', '$curr_date')";
    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

// echo "Your score: " .$score;
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
            <h1><?php echo $score; ?></h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>You're Done!</h2>
            <p>Congrats! you have completed the test</p>
            
            <p>Final Score: <?php echo $score; ?></p>
            <a href="index.php" class="start">Go back</a>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2019, Project Q
        </div>
    </footer>
</body>
</html>