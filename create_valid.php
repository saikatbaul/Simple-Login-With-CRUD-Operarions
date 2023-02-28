<?php
require_once "connection.php";

$name = $email = $mobile = "";
$nameErr = $emailErr = $mobileErr = $error = "";

if(isset($_POST['save']))
{   
    if (empty($_POST["name"])) 
	{
		$nameErr = "Name is required";
	} 
	else 
	{
		$name = $_POST["name"];
		if (preg_match("/^[a-zA-Z -]*$/",$name)) 
		{
			if (str_word_count($name) >= 2) 
			{
			}
			else
			{
				$nameErr = "Atleast two word needed";
				$name = "";
			}
		}
		else
		{
			$nameErr = "Only A-Z, a-z, Dash(-) and Period( ) are allowed";
			$name = "";
		}
	} 

    if (empty($_POST["email"])) 
	{
		$emailErr = "Email is required";
	} 
	else 
	{
		$email = $_POST["email"];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$emailErr = "Invalid email format";
			$email ="";
		}
		else
		{
		}
	}

    if (empty($_POST["mobile"])) 
	{
		$mobileErr = "Mobile number is required";
	} 
	else 
	{
		$mobile = $_POST["mobile"];
		if (preg_match("/^[0-9]*$/",$mobile)) 
		{
			if (strlen($mobile) == 11) 
			{
			}
			else
			{
				$mobileErr = "Mobile number is exact 11 digit";
				$mobile = "";
			}
		}
		else
		{
			$mobileErr = "Only 0-9 is allowed";
			$mobile = "";
		}
	}

    if(empty($name) || empty($email) || empty($mobile))
	{ 
	}
    else  
	{  
        $sql = "INSERT INTO users (name,mobile,email)
        VALUES ('$name','$mobile','$email')";
        if (mysqli_query($conn, $sql)) 
        {
?>
			<script>window.location.href= 'list.php'</script>
<?php
           exit();
        } 
        else 
        {
           echo "Error: " . $sql . "        " . mysqli_error($conn);
        }
        mysqli_close($conn);
	}
}
?>