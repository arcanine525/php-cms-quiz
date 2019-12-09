<?php include("includes/header.php") ?>


    <div id="wrapper">

        <!-- Navigation -->
        
        <?php include("includes/navigation.php") ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Project Q Admin Panel
                        </h1>
                        <!-- <table class="table table-bordered table-hover">
                               
                                <thead>
                                    <tr>
                                        <th>Quiz Title</th>
                                        <th>Url</th>
                                    </tr>
                                </thead> -->
                                
<?php 
// $query_user = "SELECT * FROM users WHERE username = '".$_SESSION['user_name']."' ";
// $user_id = $mysqli->query($query_user) or die($mysqli->error.__Line__);
// $id_user = $row['id'];
// $query = "SELECT * FROM quiz WHERE user_id='".$id_user."' GROUP BY title ORDER BY id";
// $questions = $mysqli->query($query) or die($mysqli->error.__Line__);

// while ($row = mysqli_fetch_assoc($questions)){
//     $quiz_title = $row['title'];
//     $quiz_number = $row['question_number'];
    
//     echo "<tr>";
//     echo "<td> {$quiz_title} </td>";
//     echo "<td> <li> <a href='../question.php?n={$quiz_number}'> http://localhost/projectq/question.php?n={$quiz_number} </a> </li> </td>";
//     echo "</tr>";
// }
?>
                                <!-- <tbody>
                                
                                </tbody>
                            </table> -->
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
