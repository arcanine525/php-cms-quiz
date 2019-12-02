<?php
if (isset($_COOKIE['username'])) {
    header("Location: home.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Project Q is new way to use quizes to improve your skills">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,400i" rel="stylesheet">
    
    <link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/favicons/favicon-16x16.png">
    <link rel="manifest" href="resources/favicons/site.webmanifest">
    <link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="resources/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="resources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <title>Quiz</title>
</head>
   <body>
    <header>
       <nav>
           <div class="row">
               <a href="index.html" ><img src="resources/img/logo.png" alt="Quizes logo" class="logo"></a>
               <a href="index.html" ><img src="resources/img/logo-black.png" alt="Quizes logo" class="logo-black"></a>
               <ul class="main-nav js--main-nav">
                   <li><a href="index.php#why-usid">Why us </a></li>
                   <li><a href="index.php#how-it-workId">How it works </a></li>
                   <li><a href="register.php">Sign up</a></li>
                   <li><a href="login.php">Log in</a></li>
                   
               </ul>
               
               <a class="mobile-nav-icon js--nav-icon"> <i class="ion-navicon-round"></i></a>
           </div>
       </nav>
        <div class="hero-text-box">
            <h1>Start your experience <br> New way to use Quizes</h1>
            <!-- <a class="btn btn-full js--scroll-to-plan" href="#">Premium account</a> -->
            <a class="btn btn-ghost btn-header" href="register.php">Free account</a>
        </div>
    </header>
    <section class="section-features js--section-features" id="why-usid">

    </section>
    
    
    <section class="section-steps">
       <div class="row" id="how-it-workId">
           <h2>How it works - Simple as 1, 2, 3</h2>
       </div>
       <div class="row">
           <div class="col span-1-of-2 steps-box">
               <img src="resources/img/question.svg" alt="questions" class="step-img-question js--wp-2">
           </div>
           <div class="col span-1-of-2 steps-box">
               <div class="works-step">
                    <div>1</div>
                    <p>Choose the subscription plan that best fits your needs and sign up today.</p>
               </div>
                <div class="works-step">
                    <div>2</div>
                    <p>Make <br> quiz.</p>
               </div>
                <div class="works-step">
                    <div>3</div>
                    <p>Copy link <br> and send to someone.</p>
               </div>
           </div>
       </div>
        
    </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
<script src="vendors/js/jquery.waypoints.min.js"></script>
<script src="resources/js/script.js"></script>
    
</body>

<?php
    include "footer.php";
?>
</html>
