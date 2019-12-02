<?php include("admin/includes/database.php") ?>
<?php session_start(); ?>
<?php 
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    global $MY_KEY;
    $en_password = md5($password1.$MY_KEY);
    
    if($password1 == $password2){
        $query = "INSERT INTO users(username, password, name, surname, email) VALUES ('$username','$en_password','$name','$surname','$email')";
        $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $_SESSION['username'] = $username;
        header("Location: login.php");
    }
    else{
        echo "<h2>Incorrect password </h2>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,400i" rel="stylesheet">
    
    <title>Quiz</title>
<body style="background-color: #1c2732">
  <nav>
           <div class="row">
               <a href="index.html" ><img src="resources/img/logo.png" alt="Omnifood logo" class="logo"></a>
               <ul class="main-nav">
                   <!-- <li><a href="index.php#why-usId">Why us </a></li>
                   <li><a href="index.php#how-it-workId">How it works </a></li>
                   <li><a href="index.php#companiesId">Companies </a></li>
                   <li><a href="index.php#pricingId">Pricing</a></li>
                   <li><a href="register.php">Sign up </a></li> -->
                   <li><a href="login.php">Log in</a></li>
                   
               </ul>
           </div>
       </nav>
   <section>
       <form class="box-sign-up" action="" method="post" enctype="multipart/form-data">
        <h2>Sign up</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password1" placeholder="Password" required>
        <input type="password" name="password2" placeholder="Password" required>
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="surname" placeholder="Surname" required>
        <input type="email" name="email" placeholder="E mail" required>
        <input type="submit" name="submit" value="Register" required>
    </form>
   </section>
    
</body>
</head>