<?php
$error = $count = "";
if (isset($_POST['submit']))
{
	if (empty($_POST["uname"]) || empty($_POST["password"])) 
	{
		$error = "Both username and password required";
	} 
	else 
	{
		$uname = $_POST['uname'];
		$password = $_POST['password'];
		require_once 'connectionDb.php';
		$conn = db_conn();
	    $selectQuery = "SELECT * FROM `admin` WHERE uname = :uname AND password = :password";
	    try
	    {
	        $stmt = $conn->prepare($selectQuery);
	        $stmt->execute([
	            ':uname' => $uname,
	            ':password' => $password
	        ]);
	    }
	    catch(PDOException $e)
	    {
	        echo $e->getMessage();
	    }
	    $count = $stmt->rowCount();
	    if($count == 1)
		{
?>
		<script>window.location.href= 'list.php'</script>
<?php
        exit();
		}
		else
		{
			$error = "Invalid";
		}
	}
}
?>