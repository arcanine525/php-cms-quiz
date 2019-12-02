<!-- COPY from create_category.php -->
<?php include("includes/header.php"); ?>
<?php session_start(); ?>
<?php ob_start() ?>
<?php 
    error_reporting(0);

if(isset($_POST['submit'])){
    
    $cat_title = $_POST['cat_title'];
    
    $query = "INSERT INTO levels(name) VALUES('$cat_title')";
    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

}
?>
   

    <div id="wrapper">

        <!-- Navigation -->
        
        <?php include("includes/navigation.php") ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    
                    
                    <form action="" method="post" enctype="multipart/form-data">  
                            <h1 class="page-header">
                                Create quiz level
                            </h1>

                        <div class="col-xs-6">
                          
                           
                            <form action="" method="post">
                                <div class="form-group">
                                   <label for="cat_title">Add level</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>
                            
                            
                        </div>
                        
                        
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                               
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Level Name</th>
                                    </tr>
                                </thead>
<?php 
$query = "SELECT * FROM levels";
$levels = $mysqli->query($query) or die($mysqli->error.__Line__);
while ($row = mysqli_fetch_assoc($levels)){
    $id = $row['id'];
    $name = $row['name'];

    echo "<tr>";
    echo "<td>{$id}</td>";
    echo "<td>{$name}</td>";
    echo "<td> <a href='create_level.php?delete={$id}'> Delete </a> </td>";
    echo "</tr>";
}

if(isset($_GET['delete'])){
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM levels WHERE id = {$the_cat_id}";
    $delete_query = $mysqli->query($query) or die($mysqli->error.__Line__);
    header("Location: create_level.php");
}

?>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div>
                        
                        
                    </form>
                    
                    
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
