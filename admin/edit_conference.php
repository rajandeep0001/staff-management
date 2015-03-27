<?php session_start(); 
	include 'include/connection.php'; 
	
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
	
	
	
	<?php include 'include/link.php';?>
	
	<div id="main"><br/>
			
		

		<div id="main" style="text-align:Center;">
				<h2>Department of Information Technology</h2>
    
   		<form action="" method="post">
			<?php
				
				$sql="SELECT * FROM conference where username='".$_SESSION['username']."'";
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
							<input type="text" name="title" class="txt2" value="<?php echo $row[1]; ?> ">
						</td>
        		</tr>
        		<tr>
          			<td><h3>Nature:</h3></td>
          			<td>
							<input type="text" name="nature" class="txt2" value="<?php echo $row[2]; ?>"  />
						        
					</td>
				</tr>
        		<tr>
          				<td><h3>Organized_by:</h3></td>
          				<td>
							<input type="text" name="organized_by" class="txt2" value="<?php echo $row[3]; ?>"  />
						</td>
        		</tr>
        		<tr>
          			<td><h3>Year:</h3></td>
          			<td><input type="text" name="year" class="txt2" value="<?php echo $row[4]; ?>"  />
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
				
				$sql="UPDATE conference SET title = '".$title."', nature = '".$nature."', organized_by ='".$organized_by."', year='".$year."'  WHERE  username='".$_GET['username']."'";
				
				
			if($mysqli->query($sql))
			{
				echo "Updated Successfully";
				echo '<script>window.location="conference.php";</script>';
				
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