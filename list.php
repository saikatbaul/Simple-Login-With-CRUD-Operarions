<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Php CRUD</title>
<?php include "head.php";?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="page-header clearfix">
                    <h2 class="pull-left">Users List</h2>
                    <a href="logout.php" name="out" class="btn btn-success pull-right">Logout</a>
                </div>
                <?php
                include_once 'connection.php';
                $result = mysqli_query($conn,"SELECT * FROM users");
                ?>
                <?php
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <table class='table table-bordered table-striped'>
                        <tr>
                            <td><b>ID</b></td>
                            <td><b>Name</b></td>
                            <td><b>Email Id</b></td>
                            <td><b>Mobile</b></td>
                            <td><b>Action</b></td>
                        </tr>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo ($row["mobile"])?($row["mobile"]):('N/A'); ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row["id"]; ?>" title='Update Record'><span class='glyphicon glyphicon-pencil'></span></a>
                        <a href="delete.php?id=<?php echo $row["id"]; ?>" title='Delete Record'><span class='glyphicon glyphicon-trash'></span></a>
                    </td>
                </tr>
                <?php
                $i++;
                }
                ?>
                </table>
                    <?php
                }
                else{
                    echo "No result found";
                }
                ?>
                <a href="create.php" name="add" class="btn btn-success pull-right">Add New User</a>
            </div>
        </div>     
    </div>
</body>
</html>