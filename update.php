<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <?php 
    include "head.php"; 
    include "update_valid.php";
    ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>Update Record</h2>
                </div>
                <p>Please edit the input values and submit to update the record.</p>
                <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>">   
                        <span id="nameErr"></span><span><?php echo $nameErr;?></span>
                    </div>
                    <div class="form-group ">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $row["email"]; ?>">
                        <span id="emailErr"></span><span><?php echo $emailErr;?></span>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="mobile" name="mobile" class="form-control" value="<?php echo $row["mobile"]; ?>">
                        <span id="mobileErr"></span><span><?php echo $mobileErr;?></span>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    <a href="list.php" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>  
    </div>
</body>
</html>