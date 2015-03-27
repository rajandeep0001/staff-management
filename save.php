<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
			
if(isset($_POST['save']))
{
$mysqli=new mysqli("localhost","root","1397","faculty");
if ($mysqli===false)
	{
	die("Can't connect to database.". mysqli_connect_error());
	}
	$username=$_POST['username'];
	$password=$_POST['password'];
	
		
	$sql="UPDATE profile SET name = '".$name."', dob = '".$dob."', designation ='".$designation."', experience = '".$experience."' and qualification = '".$qualification."' WHERE  username='".$_SESSION['username']."' and password='".$_SESSION['password']."'";

if($result=$mysqli->query($sql))
{
if($result->num_rows>0)
	{

/*			echo "login successful";
*/	
	include($username.".php");			
	}
	else
		{
		echo "No Records Matching";
		}
}
else {
	echo "Error: Could not execute $sql.".$mysqli->error;
	}

/*$mysqli->close();
*/}
?>

</body>
</html>
