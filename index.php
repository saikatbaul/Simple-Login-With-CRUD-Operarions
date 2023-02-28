<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<?php 
include "head.php";
include 'login_valid.php';
?>
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
                    <h2 class="pull-left">Please Login</h2>
                </div>
				<form method="post">
					<div class="inset">
						<p>
							<input type="text" name="uname" id="uname" value="", placeholder="User name">
						</p>
						<p>
							<input type="password" name="password" id="password" value="" placeholder="Password">
						</p>
					</div>
					<span id="error"></span><span><?php echo $error;?></span>
					<p class="p-container">
						<input type="submit" class="btn btn-success" name="submit" id="submit" value="Login" >
					</p>
				</form>
            </div>
        </div>     
    </div>
</body>
</html>