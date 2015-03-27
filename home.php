<?php session_start(); 
	include 'include/connection.php'; 
	if(!isset($_POST['login']) and !isset($_SESSION['username']))
		{
		echo "<script>window.location='index.php';</script>";
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Home</title>
		<link href="css/profile.css" rel="stylesheet" type="text/css" />
		<script>
				function fun()
				{
					var a=document.getElementById('area').innerHTML;
					alert(a);
					window.location='abc.php?a='+a;
				}
		</script>
</head>
<body id="body" bgcolor="fff8c6">
	
	<div id="log_link">
		<div id="log_con">
				<form action="home.php" method="post">
						<input type="submit" name="edit" value="Profile" />
				</form>
				<form action="edit_profile.php" method="post">
						<input type="submit" name="edit" value="Edit Profile" />
				</form>
				<form action="edit_record.php" method="post">
						<input type="submit" name="records" value="Edit Records" />
				</form>
				<form action="logout.php">
						<input type="submit" name="logout" value="Logout" />
				</form>
				
		</div>
	</div>
	<div id="main">
	<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="SELECT * FROM profile where username='$username' and password='$password'";
			if($result=$mysqli->query($sql))
				{
				if($result->num_rows>0)
					{
						$_SESSION['username'] = $username;
						$_SESSION['password'] = $password;
						if($row=$result->fetch_array())
							{
									$_SESSION['id']=$row[0];
							}
						//include($username.".php");
						
					}
				else
					{
						echo "No Records Matching";
						echo "<script>window.location='index.php';</script>";
					}
				}
			else{
					echo "Error: Could not execute $sql.".$mysqli->error;
				}
	}
	include("profile.php");
?>

</div>
</body>
</html>
