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
				<h2>Department of Information Technology</h2>
    
   		<form action="" method="post" enctype="multipart/form-data">
   		<table id="tab2"  style="text-align:left;">
      		<tbody>
				<tr>
					<td colspan="5"><h3>Research Information</h3></td>
				</tr>
        		<tr>
						<td><h3>Username:</h3></td>
						<td>
							<input type="text" name="username" class="txt2" >
						</td>
        		</tr>
        		<tr>
						<td><h3>Nature:</h3></td>
						<td>
							<input type="text" name="nature" class="txt2" >
						</td>
        		</tr>

        		<tr>
          			<td><h3>Details:</h3></td>
          			<td>
							<input type="text" name="details" class="txt2"   />
						         
					</td>
				</tr>
				<
        		
				<tr>
						<td> 			<input type="submit" name="save" value="Save" class="btn"/> </td>
				</tr>
      </tbody>
    </table><br />
    
    </form>
	<?php
			
if(isset($_POST['save']))
{
				$username=$_POST['username'];
                $nature=$_POST['nature'];
                $details=$_POST['details'];
				
				
	

	
	$sql="insert into research values(null,'".$username."','".$nature."','".$details."')";
				
				
			if($mysqli->query($sql))
			{
				echo "Updated Successfully";
				echo '<script>window.location="research.php";</script>';
				
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