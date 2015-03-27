<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Staff Profile</title>
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<link href="css/style2.css" rel="stylesheet" type="text/css" />
			
			
</head>
<body bgcolor="fff8c6" alink="#333333" vlink="#333333" link="#333333">
			<div id="adminlogin">
				<div id="title">ADMIN LOGIN</div>
				<center>
					<form method="post">
						<table>
								<tr>
										<td><h3>User name</h3></td>
										<td><input type="text" name="nm" class="txt"></td>
								</tr>
								<tr>
										<td><h3>Password</h3></td>
										<td><input type="password" name="ps" class="txt"></td>
								</tr>
								<tr>
										<td colspan="2">
												<input type="submit" value="login" class="btn" name="sub"/>
												<input type="Reset" value="Reset" class="btn"/>
										</td>
								</tr>
								<tr>
										<td colspan="2">
											
			<?php
					if(isset($_POST['sub']))
						{
							define('user','admin');
							define('pass','admin123');
							if($_POST['nm']==user and $_POST['ps']==pass)
								{
									$_SESSION['admin']='Yes';
									echo '<script>window.location="profile.php";</script>';
								}
							else{
									echo '<h4>Check user name and password!</h4>';
								}
						}
			
			?>
										</td>
								</tr>
						
						</table>
					</form>
				</center>
			</div>
</body>
</html>
