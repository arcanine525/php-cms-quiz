<?php include("admin/includes/database.php") ?>
<?php session_start(); ?>

<?php 

if(isset($_POST['user'])){
    $user=$_POST['user'];
    $pass=$_POST['password'];
    
    $query = "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."' LIMIT 1 ";
    
    $result = $mysqli->query($query) or die($mysqli->error.__Line__);
    
    if(mysqli_num_rows($result)==1){
        echo "<h1> you have successfully logged in </h1>";
        header("Location: quiz.php");
        $_SESSION['user_name']=$user;
        
    }
    else{
        echo "<h1> you have entered incorrect password</h1>";
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
                   <li><a href="index.php#why-usId">Why us </a></li>
                   <li><a href="index.php#how-it-workId">How it works </a></li>
                   <li><a href="index.php#companiesId">Companies </a></li>
                   <li><a href="index.php#pricingId">Pricing</a></li>
                   <li><a href="register.php">Sign up </a></li>
                   <li><a href="login.php">Log in</a></li>
                   
               </ul>
           </div>
       </nav>
   <section>
       <form class="box-log-in" action="" method="post">
        <h2>Login</h2>
        
        <input type="text" name="user" value="<?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?>" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Login">
    </form>
   </section>
    
</body>
</head>