<?php session_start(); 
	include 'connection.php'; 
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	
	
	
	<div id="main"><br/>
		<div id="main" style="text-align:Center;">
				<!--<h2>Department of Information Technology</h2>-->
    
   		<form action="" method="post">
			<?php
				
				$sql="SELECT * FROM journal where username='".$_SESSION['username']."'";
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
					<td colspan="5"><h3>Journal Information</h3></td>
				</tr>
        		<tr>
						<td><h3>TITLE:</h3></td>
						<td>
							<input type="text" name="title" class="txt2" value="<?php echo $row[1]; ?> ">
						</td>
        		</tr>
        		<tr>
          			<td><h3>college:</h3></td>
          			<td>
							<input type="text" name="college" class="txt2" value="<?php echo $row[2]; ?>"  />
							        
					</td>
				</tr>
        		<tr>
          				<td><h3>Alongwith:</h3></td>
          				<td>
							<input type="text" name="alongwith" class="txt2" value="<?php echo $row[3]; ?>"  />
						</td>
        		</tr>
        		<tr>
          			<td><h3>paper:</h3></td>
          			<td><input type="text" name="paper" class="txt2" value="<?php echo $row[4]; ?>"  />
						</td>
        		</tr>
      		    <tr>
          			<td><h3>volume:</h3></td>
          			<td><input type="text" name="volume" class="txt2" value="<?php echo $row[5]; ?>" />
					</td>
				</tr>
				<tr>
					  <td><h3>Nature:</h3></td>
					  <td>
						<input type="text" name="nature" class="txt2" value="<?php echo $row[6];?> " />
						</td>
				</tr>
				<tr>
						<td><h3>Page:</h3></td>
						<td>
								<input type="text" name="page" class="txt2" value="<?php echo $row[7];?> " />
						</td>
				</tr>
				<tr>
						<td><h3>Issue:</h3></td>
						  <td>
						  
								<input type="text" name="issue" class="txt2" value=" <?php echo $row[8];?>"/>
						
						</td>
				</tr>
				<tr>
						<td><h3>issuen:</h3></td>
						<td>
						<input type="text" name="issuen" class="txt2" value=" <?php echo $row[9];?>"/>
							
						</td>
				</tr>
				<tr>
						<td><h3>venue:</h3></td>
						<td>
					<input type="text" name="venue" class="txt2" value=" <?php echo $row[10];?>"/>
						</td>
				</tr>
				<tr>
						<td><h3>month:</h3></td>
						<td>
								<input type="text" name="month" class="txt2" value=" <?php echo $row[11];?>"/>
						</td>
				</tr>
				<tr>
						<td><h3>year:</h3></td>
						<td>
								<input type="text" name="year" class="txt2" value=" <?php echo $row[12];?>"/>
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
				$along_with=$_POST['along_with'];
				$paper=$_POST['paper'];
				$volume=$_POST['volume'];
				$nature=$_POST['nature'];
				$issue=$_POST['issue'];
				$issuen=$_POST['issuen'];
				$venue=$_POST['venue'];
				$month=$_POST['month'];
				$year=$_POST['year'];
				$sql="UPDATE journal SET title = '".$title."', along_with = '".$along_with."', paper ='".$paper."', volume ='".$volume."' , nature ='".$nature."' , issue ='".$issue."' , issuen = '".$issuen."', venue = '".$venue."', month = '".$month."', year='".$year."' WHERE  username='".$_SESSION['username']."'";
				
				
			if($mysqli->query($sql))
			{
				echo "Updated Successfully";
				echo '<script>window.location="journal.php";</script>';
				
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