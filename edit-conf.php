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
	
	hello
	<?php include 'include/link.php';?>
	
	<div id="main"><br/>
			<div id="area">
				<div id="logo">
						<img src="images/logo.png" width="207" height="162" border="0" usemap="#Map" />
						<map name="Map" id="Map">
								<area shape="circle" coords="104,80,80" href="index.php" />
						</map>	
				</div>
				<div id="college">
						<img src="images/gne.jpg" width="100%" height="170" />
				</div>
			</div>

		<div id="main" style="text-align:Center;">
				<h2>Department of Information Technology</h2>
    
   		<form action="" method="post">
			<?php
				
				$sql="SELECT * FROM conference where useraname='"$_SESSION['username']"'";
				if($result=$mysqli->query($sql))
					{
						if($result-> num_rows>0)
						{
							while($row=$result->fetch_array())
							{
			?>
   		<table id="tab2"  style="text-align:left;">
      		<tbody>
				<tr>
					<td colspan="5"><h3>conference Information</h3></td>
				</tr>
        		<tr>
						<td><h3>Title:</h3></td>
						<td>
							<input type="text" name="title" class="txt2" value="<?php echo $row[3]; ?> ">
						</td>
        		</tr>
        		<tr>
          			<td><h3>Nature</h3></td>
          			<td>
							<input type="text" name="nature" class="txt2" value="<?php echo $row[4]; ?>"  />
						        
					</td>
				</tr>
        		<tr>
          				<td><h3>Organized_by:</h3></td>
          				<td>
							<input type="text" name="organized_by" class="txt2" value="<?php echo $row[5]; ?>"  />
						</td>
        		</tr>
        		<tr>
          			<td><h3>Year:</h3></td>
          			<td><input type="text" name="year" class="txt2" value="<?php echo $row[6]; ?>"  />
						</td>
        		</tr>
      		    
				<tr>
						<td> 			<input type="submit" name="save" value="Save" class="btn"/> </td>
				</tr>
      </tbody>
    </table><br />
    
    </form>
	<?php
							}
					$result->close();
					}
					else
					{
						echo"no records matching";
					}
			}
			else
			{
					echo"ERROR:could not execute $sql.".$mysqli->error;
			}
			
if(isset($_POST['save']))
{
				$username=$_SESSION['username'];
				$password=$_SESSION['password'];
				$title=$_POST['title'];
				$nature=$_POST['nature'];
				$organized_by=$_POST['organized_by'];
				$year=$_POST['year'];
				
				$sql="UPDATE conference SET title = '".$title."', nature = '".$nature."', organized_by ='".$organized_by."', year='".$year."'  WHERE  username='".$_SESSION['username']."'";
				
				
			if($mysqli->query($sql))
			{
				echo "Updated Successfully";
				echo '<script>window.location="?";</script>';
				
			}

			else{
						echo "Error: Could not execute $sql.".$mysqli->error;
				}
	}
?>


  </div>
	</div>
</body>
</html>