<?php session_start();
		if(!isset($_SESSION['admin']))
			{
				echo "<script>window.location='index.php';</script>";
			}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Staff Profile</title>
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<link href="css/profile.css" rel="stylesheet" type="text/css" />
			<style>
					#main{
							border:1px solid Gray;
							min-height:500px;
							border-radius:15px;
							box-shadow:0px 0px 10px gray;
					}
					#title ul li{
							list-style-type:none;
							float:left;
							padding-left:15px;
							padding-right:15px;
							font-size:19px;
							color:white;
					}
				
			</style>
			
			
</head>
<body bgcolor="fff8c6" alink="#333333" vlink="#333333" link="#333333">
			<br/>
			<div id="main">
					<div id="title">
							<?php include 'link.php'; ?>
					</div>
					<div id="con">
						<a href="add_research.php">	<input type="button" value="Add new" /></a>
						
							<?php						
					include 'connection_2.php';
					$sql="select * from research";
					$result=mysql_query($sql);
					echo "<table border='1'>
								<tr>
										<th>username</th>
										<th>nature</th>
										<th>detail</th>
										<th>Edit</th>
										<th>Delete</th>
								</tr>";		
					while($row=mysql_fetch_array($result))
					{
								echo "<tr>
											<td>".$row['username']."</td>
											<td>".$row['nature']."</td>
											<td>".$row['details']."</td>
											<td><a href='?e=".$row['username']."'>Edit</a></td>
											<td><a href='?d=".$row['username']."'>Delete</a></td>
										</tr>";
					}
					
					echo "</table>";
			if(isset($_GET['d']))
				{
						$sql="delete from research where username='$_GET[d]'";
						if(mysql_query($sql))
							{
								echo "<script>window.location='?';</script>";
							}
				
				
				}
			if(isset($_GET['e']))
				{
						echo '<script>window.location="edit_conference.php?e='.$_GET['e'].'";</script>';
				}

								?>	
					</div>
			</div>
</body>
</html>
