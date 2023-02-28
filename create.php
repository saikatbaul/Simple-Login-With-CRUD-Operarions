<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <?php 
    include "head.php"; 
    include "create_valid.php";
    ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>Create Record</h2>
                </div>
                <p>Please fill this form and submit to add employee record to the database.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
                        <span id="nameErr"></span><span><?php echo $nameErr;?></span>
                    </div>
                    <div class="form-group ">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $email;?>">
                        <span id="emailErr"></span><span><?php echo $emailErr;?></span>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="mobile" name="mobile" class="form-control" value="<?php echo $mobile;?>">
                        <span id="mobileErr"></span><span><?php echo $mobileErr;?></span>
                    </div>
                    <input type="submit" class="btn btn-primary" name="save" value="submit">
                    <a href="list.php" class="btn btn-default">Cancel</a>
                </form>
            </div>

        </div> 
            
    </div>
</body>
</html>