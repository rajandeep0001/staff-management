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
					<td colspan="5"><h3>Personal Information</h3></td>
				</tr>
        		<tr>
						<td><h3>username:</h3></td>
						<td>
							<input type="text" name="username" class="txt2" >
						</td>
        		</tr>
        		<tr>
						<td><h3>password:</h3></td>
						<td>
							<input type="text" name="password" class="txt2" >
						</td>
        		</tr>
        		<tr>
						<td><h3>Name:</h3></td>
						<td>
							<input type="text" name="name" class="txt2" >
						</td>
        		</tr>
        		<tr>
          			<td><h3>Date of Birth:</h3></td>
          			<td>
							<input type="text" name="dob" class="txt2"   />
							(yyyy/mm/dd)         
					</td>
				</tr>
        		<tr>
          				<td><h3>Designation:</h3></td>
          				<td>
							<input type="text" name="designation" class="txt2"  />
						</td>
        		</tr>
				<tr>
          				<td><h3>Qualification:</h3></td>
          				<td>
							<input type="text" name="qual" class="txt2"  />
						</td>
        		</tr>
				<tr>
          				<td><h3>Experience:</h3></td>
          				<td>
							<input type="text" name="experience" class="txt2"  />
						</td>
        		</tr>
        		<tr>
          			<td><h3>Research Interest:</h3></td>
          			<td><input type="text" name="research_interest" class="txt2"   />
						</td>
        		</tr>
      		    <tr>
          			<td><h3>Office Address:</h3></td>
          			<td><input type="text" name="office_address" class="txt2" />
					</td>
				</tr>
				<tr>
					  <td><h3>Contact Number:</h3></td>
					  <td>
						<input type="text" name="contact_no" class="txt2" />
						</td>
				</tr>
				<tr>
						<td><h3>Email Id:</h3></td>
						<td>
								<input type="text" name="e_id" class="txt2"/>
						</td>
				</tr>
				<tr>
						<td><h3>Publication</h3></td>
						<td>
								<input type="text" name="publication" class="txt2"/>
						</td>
				</tr>
				<tr>
						<td><h3>thesis_guided</h3></td>
						<td>
								<input type="text" name="thesis_guided" class="txt2"/>
						</td>
				</tr>
				<tr>
						<td><h3>conference:</h3></td>
						  <td>
							<textarea  name="conference" class="txtarea"></textarea>
						</td>
				</tr>
				<tr>
						<td><h3>Expert_talk</h3></td>
						<td>
							<textarea name="expert_talk" class="txtarea"></textarea>
						</td>
				</tr>
				<tr>
						<td><h3>pic</h3></td>
						<td>
							<input type="file" name="fl">
						</td> 
				</tr>
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
				$password=$_POST['password'];
				$name=$_POST['name'];
				$dob=$_POST['dob'];
				$designation=$_POST['designation'];
				$research_interest=$_POST['research_interest'];
				$office_address=$_POST['office_address'];
				$contact_no=$_POST['contact_no'];
				$e_id=$_POST['e_id'];
				$qual=$_POST['qual'];
				$experience=$_POST['experience'];
				
				$conference=$_POST['conference'];
				$expert_talk=$_POST['expert_talk'];
				$publication=$_POST['publication'];
				$thesis_guided=$_POST['thesis_guided'];
				
	
					$a=rand(0,500);
					$b=time();
					$c=md5(time());
					$dest="..//images/".$c.$b.$a.$_FILES['fl']['name'];
					$pic="images/".$c.$b.$a.$_FILES['fl']['name'];
					move_uploaded_file($_FILES['fl']['tmp_name'],$dest);
	
	
	$sql="insert into profile values(null,'".$username."','".$password."','".$name."','".$dob
		."','".$designation."','".$experience."','".$qual."','".$research_interest."',
		'".$office_address."','".$contact_no."','".$e_id."','".$conference."','".$expert_talk."',
		'".$publication."','".$thesis_guided."','".$pic."')";
				
				
			if($mysqli->query($sql))
			{
				echo "Updated Successfully";
				echo '<script>window.location="profile.php";</script>';
				
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