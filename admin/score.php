<?php include("includes/header.php") ?>
<?php //session_start() ?>

    <div id="wrapper">

        <!-- Navigation -->
        
        <?php include("includes/navigation.php") ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Score
                        </h1>
                        <table class="table table-bordered table-hover">
                               
                                <thead>
                                    <tr>
                                        <th>Quiz Title</th>
                                        
                                        <th>Username</th>
                                        <th>Score</th>
                                    </tr>
                                </thead>
                                
<?php 
    
    
$query_user = "SELECT * FROM users WHERE username = '".$_SESSION['user_name']."' ";
$user_id = $mysqli->query($query_user) or die($mysqli->error.__Line__);
$id_user = $row['id'];
$query_score = "SELECT * FROM result WHERE creator_id = '".$id_user."' ";
$result = $mysqli->query($query_score) or die($mysqli->error.__Line__);

while ($row = mysqli_fetch_assoc($result)){
    $quiz_title = $row['question_title'];
    $username = $row['username'];
    $user_result = $row['score'];
    
    echo "<tr>";
    echo "<td> {$quiz_title} </td>";
    echo "<td> {$username} </td>";
    echo "<td> {$user_result} </td>";
    echo "</tr>";
    
}

?>
                                <tbody>
                                
                                </tbody>
                            </table>
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
