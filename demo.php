<?php include("admin/includes/database.php") ?>
<?php session_start(); ?>

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