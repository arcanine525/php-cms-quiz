<?php error_reporting(0); session_start(); ?>
          
           <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Project Q</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                
                <?php 
                
                $query = "SELECT * FROM users WHERE username='".$_SESSION['user_name']."'";
                $select_name_surname = $mysqli->query($query) or die($mysqli->error.__LINE__);
                $row = mysqli_fetch_assoc($select_name_surname);
                $name = $row['name'];
                $surname = $row['surname'];
                
                ?>
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $name ." ". $surname; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Log out</a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="./index.php"><i class="fa fa-fw fa-wrench"></i> Main</a>
                    </li>
                    <li>
                        <a href="./create.php"><i class="fa fa-fw fa-edit"></i> Add Quiz</a>
                    </li>
                    
                    <li>
                        <a href="./create_category.php"><i class="fa fa-fw fa-wrench"></i> Add and delete category</a>
                    </li>

                    <li>
                        <a href="./create_level.php"><i class="fa fa-fw fa-wrench"></i> Add and delete level</a>
                    </li>
                       
                    <li>
                        <a href="./score.php"><i class="fa fa-fw fa-wrench"></i> Score</a>
                    </li>

                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
