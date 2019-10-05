<?php include("includes/header.php"); ?>
<?php session_start(); ?>
<?php ob_start() ?>
<?php 
    error_reporting(0);

if(isset($_POST['submit'])){
    
    $cat_title = $_POST['cat_title'];
    
    $query = "INSERT INTO category(cat_title) VALUES('$cat_title')";
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
                                Create your own quiz category
                            </h1>

                        <div class="col-xs-6">
                          
                           
                            <form action="" method="post">
                                <div class="form-group">
                                   <label for="cat_title">Add Category</label>
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
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
<?php 
$query = "SELECT * FROM category";
$category = $mysqli->query($query) or die($mysqli->error.__Line__);
while ($row = mysqli_fetch_assoc($category)){
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];

    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td> <a href='create_category.php?delete={$cat_id}'> Delete </a> </td>";
    echo "</tr>";
}

if(isset($_GET['delete'])){
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM category WHERE cat_id = {$the_cat_id}";
    $delete_query = $mysqli->query($query) or die($mysqli->error.__Line__);
    header("Location: create_category.php");
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
