
<?php
			
if(isset($_POST['expT']))
{
$mysqli=new mysqli("localhost","root","1397","faculty");
if ($mysqli===false)
	{
	die("Cant connect to database.". mysqli_connect_error());
	}
	session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
	/*$name=$_POST['name'];
	$dob=$_POST['dob'];
	$designation=$_POST['designation'];
	$research_interest=$_POST['research_interest'];
	$office_address=$_POST['office_address'];
	$contact_no=$_POST['contact_no'];
	$e_id=$_POST['e_id'];
		
		
	$sql="UPDATE profile SET name = '".$name."', dob = '".$dob."', designation ='".$designation."', office_address ='".$office_address."' , e_id ='".$e_id."' , contact_no ='".$contact_no."' , research_interest = '".$research_interest."' WHERE  username='".$username."'";
	
	echo "all";*/
	
	
					$fields=$_POST['et'];
					
					for($i=1; $i <=  $fields; $i++)
					{
						$et_title = $_POST['et_title'.$i];
						$et_org = $_POST['et_org'.$i];
						$et_yr = $_POST['et_yr'.$i];			
						$sql="INSERT into expert_talk (username,title,organization,year) VALUES('$username','$et_title','$et_org','$et_yr')";
					}
	if($result=$mysqli->query($sql))
{
if($result->num_rows>0)
	{

/*			echo "login successful";
*/	
	echo "Updated Successfully";			
	}
	/*else
		{
		echo "No Records Matching";
		}
*/
}

else {
	echo "Error: Could not execute $sql.".$mysqli->error;
	}

$mysqli->close();

}
?>


<?php
			
if(isset($_POST['reP']))
{
$mysqli=new mysqli("localhost","root","","faculty");
if ($mysqli===false)
	{
	die("Cant connect to database.". mysqli_connect_error());
	}
	session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
	
	
					$fields=$_POST['rp'];
					
					for($i=1; $i <=  $fields; $i++)
					{
						$rp_nature = $_POST['rp_nature'.$i];
						$rp_details = $_POST['rp_details'.$i];
						
						$sql="INSERT into research (username,nature,details) VALUES('$username','$rp_nature','$rp_details')";
					}
					
	if($result=$mysqli->query($sql))
{
if($result->num_rows>0)
	{

/*			echo "login successful";
*/	
	echo "Updated Successfully";			
	}
	/*else
		{
		echo "No Records Matching";
		}
*/
}

else {
	echo "Error: Could not execute $sql.".$mysqli->error;
	}

$mysqli->close();

}
?>

<?php
			
if(isset($_POST['theG']))
{
$mysqli=new mysqli("localhost","root","","faculty");
if ($mysqli===false)
	{
	die("Cant connect to database.". mysqli_connect_error());
	}
	session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
			$fields=$_POST['tg'];
					
					for($i=1; $i <=  $fields; $i++)
					{
						$tg_title = $_POST['tg_title'.$i];
						$tg_name = $_POST['tg_name'.$i];
						$tg_sup = $_POST['tg_sup'.$i];
						$tg_yr = $_POST['tg_yr'.$i];

						$sql="INSERT into thesis_guided (username,title,name,supervisor,year) VALUES('$username','$tg_title','$tg_name','$tg_sup','$tg_yr')";
					}
	if($result=$mysqli->query($sql))
{
if($result->num_rows>0)
	{

/*			echo "login successful";
*/	
	echo "Updated Successfully";			
	}
	/*else
		{
		echo "No Records Matching";
		}
*/
}

else {
	echo "Error: Could not execute $sql.".$mysqli->error;
	}

$mysqli->close();

}
?>
	
    <?php
			
if(isset($_POST['conA']))
{
$mysqli=new mysqli("localhost","root","","faculty");
if ($mysqli===false)
	{
	die("Cant connect to database.". mysqli_connect_error());
	}
	session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
    
					$fields=$_POST['ca'];
					
					for($i=1; $i <=  $fields; $i++)
					{
						$ca_title = $_POST['ca_title'.$i];
						$ca_nature= $_POST['ca_nature'.$i];
						$ca_org = $_POST['ca_org'.$i];
						$ca_yr = $_POST['ca_yr'.$i];

						$sql="INSERT into conference (username,title,nature,organized_by,year) VALUES('$username','$ca_title','$ca_nature','$ca_org','$ca_yr')";
					}
	
if($result=$mysqli->query($sql))
{
if($result->num_rows>0)
	{

/*			echo "login successful";
*/	
	echo "Updated Successfully";			
	}
	/*else
		{
		echo "No Records Matching";
		}
*/
}

else {
	echo "Error: Could not execute $sql.".$mysqli->error;
	}

$mysqli->close();

}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" />


<style type="text/css">
<!--

#area
{
	width:1049px;
	height:736px;
	position:absolute;
	left: 161px;
	top: 27px;
	border:2px;
	border:#333333;
	}

#info
{
	width:684px;
	height:539px;
	position:absolute;
	left: 18px;
	top: 187px;
}
	
.style1 {font-size: 16px}
.style2 {
	font-size: 20px;
	color: #2E3F6D;
	font-weight: bold;
}
.style5 {
	font-size: 16px
}
.style8 {
	color: #BB0919;
	font-weight: bold;
	font-size: 24px;
}
.style10 {font-size: 16px; font-weight: bold; }

#box1
{
	height:33px;
	width:363px;
	position:absolute;
	left: 4px;
	top: 132px;
}
#box2
{
	height:33px;
	width:75px;
	position:absolute;
	left: 443px;
	top: 125px;
}
#box3
{
	height:33px;
	width:361px;
	position:absolute;
	left: 6px;
	top: 196px;
}
#box4
{
	height:33px;
	width:81px;
	position:absolute;
	left: 443px;
	top: 196px;
}
#box5
{
	height:33px;
	width:362px;
	position:absolute;
	left: 7px;
	top: 264px;
}
#box6
{
	height:33px;
	width:78px;
	position:absolute;
	left: 443px;
	top: 264px;
}
#box7
{
	height:33px;
	width:367px;
	position:absolute;
	left: 5px;
	top: 337px;
}
#box8
{
	height:33px;
	width:79px;
	position:absolute;
	left: 443px;
	top: 337px;
}

#logout2
{
	height:49px;
	width:62px;
	position:absolute;
	left: 1088px;
	top: 10px;
}

-->
</style>
</head>

<body bgcolor="fff8c6">



<div id="area">

<div id="logo"><img src="images/logo.png" width="207" height="162" border="0" usemap="#Map" />
		<map name="Map" id="Map">
		<area shape="circle" coords="103,79,77" href="index.php" />
		</map>
  </div>

	<div id="college"><img src="images/gne.jpg" width="772" height="170" />    </div>
  
  <div class="style1" id="info">
	  <div align="center" class="style8">Department of Information Technology</div>
   	<p align="left" class="style2">&nbsp;</p>
    
 
       <form action="" method="post">
   
   		 <table cellspacing="15" cellpadding="5">
      		<tbody>
        		<tr> <td> <span class="style5"><strong>Conferences Attended:</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          
          
          <td><span class="style5">
<select id="ca" name="ca">
          		<option value="1"> 1 </option>
          		<option value="2"> 2 </option>
          		<option value="3"> 3 </option>
        		<option value="4"> 4 </option>
          		<option value="5"> 5 </option>
       	  </select></span> <input type="submit" name="caadd" value="Add Rows" />
          	
			<?php 
				if(isset($_POST['caadd']) && isset($_POST['ca']))
				{
					$fields=$_POST['ca'];
					for($i=1; $i <=  $fields; $i++)
					{
						echo '</br><input type="text" style= " width:150px;" value ="title" name= "ca_title'.$i.'">';
						echo '&nbsp;<input type="text" style= " width:150px;" value ="nature" name= "ca_nature'.$i.'">';
						echo '</br><input type="text" style= " width:150px;" value ="organized by" name= "ca_org'.$i.'">';
						echo '&nbsp;<input type="text" style= " width:150px;" value ="year" name= "ca_yr'.$i.'"></br>';
						
					}
				}
			?>
         
          </span>
         <input type="submit" name="conA" value="Update" /></td>
         </tr>
         </tbody>
         </table>

      </form>
       
       
       <form action="" method="post">
       <table cellspacing="15" cellpadding="5">
      		<tbody>
        		<tr>
       <td>
       <span class="style5"><strong>Expert Talk:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span></td>
        
        <td> <span class="style5">
<select id="et" name="et">
          		<option value="1"> 1 </option>
          		<option value="2"> 2 </option>
          		<option value="3"> 3 </option>
        		<option value="4"> 4 </option>
          		<option value="5"> 5 </option>
       	 </select>
          	</span>
           <input type="submit" name="etadd" value="Add Rows" />
          	
			<?php 
				if(isset($_POST['etadd']) && isset($_POST['et']))
				{
					$fields=$_POST['et'];
					for($i=1; $i <=  $fields; $i++)
					{
						echo '</br><input type="text" style= " width:150px;" value= "title" name= "et_title'.$i.'">';
						echo '&nbsp;<input type="text" style= " width:150px;" value= "organization" name= "et_org'.$i.'">';
						echo '&nbsp;<input type="text" style= " width:150px;" value = "yyyy-mm-dd" name= "et_yr'.$i.'"></br>';
					}
				}
			?>
         
         
          			
           <input type="submit" name="expT" value="Update" />
</td>
</tr>
</tbody>
</table>
      </form>
         
         
         <form action="" method="post">
         <table cellspacing="15" cellpadding="5">
      		<tbody>
        		<tr>
                <td>
   <span class="style5"><strong>Research Publications:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span></td>
 
<td> <span class="style5">
<select id="rp" name="rp">
          		<option value="1"> 1 </option>
          		<option value="2"> 2 </option>
          		<option value="3"> 3 </option>
        		<option value="4"> 4 </option>
          		<option value="5"> 5 </option>
   	  </select></span>
          	
         <input type="submit" name="rpadd" value="Add Rows" />
          	
			<?php 
				if(isset($_POST['rpadd']) && isset($_POST['rp']))
				{
					$fields=$_POST['rp'];
					for($i=1; $i <=  $fields; $i++)
					{
						echo '</br><input type="text" style= " width:150px;" value ="nature" name= "rp_nature'.$i.'">';
						echo '&nbsp;<input type="text" style= " width:150px;" value ="details" name= "rp_details'.$i.'"></br>';
						
					}
				}
			?>
         
    	
     <input type="submit" name="reP" value="Update" />
</td>
</tr>
</tbody>
</table>
</form>

      <form action="" method="post">
   
<table cellspacing="15" cellpadding="5">
      		<tbody>
        		<tr>
                <td>
<span class="style5"><strong>Thesis Guided:</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><span class="style5">
<select id="tg" name="tg">
          		<option value="1"> 1 </option>
          		<option value="2"> 2 </option>
          		<option value="3"> 3 </option>
        		<option value="4"> 4 </option>
          		<option value="5"> 5 </option>
       	</select>
          	</span><input type="submit" name="tgadd" value="Add Rows" />
          	
			<?php 
				if(isset($_POST['tgadd']) && isset($_POST['tg']))
				{
					$fields=$_POST['tg'];
					for($i=1; $i <=  $fields; $i++)
					{
						echo '</br><input type="text" style= " width:150px;" value ="title" name= "tg_title'.$i.'">';
						echo '&nbsp;<input type="text" style= " width:150px;" value ="name of student" name= "tg_name'.$i.'">';
						echo '</br><input type="text" style= " width:150px;" value ="supervisor/ co-s" name= "tg_sup'.$i.'">';
						echo '&nbsp;<input type="text" style= " width:150px;" value ="year" name= "tg_yr'.$i.'"></br>';
						
					}
				}
			?>
         
       
          <input type="submit" name="theG" value="Update" />
</td></tr></tbody></table>
    </form>

  </div>


</div>
<div id="home1">
<form action="edit.php" method="post">
<input type="submit" name="edit" value="Edit Profile" />
</form>
</div>
<div id="records1">
<form action="records.php" method="post">
<input type="submit" name="records" value="Edit Records" />
</form></div>

 <div id="logout2">
 <form action="logout.php">
 <input type="submit" name="logout" value="Logout" />
</form></div> 
</body>
</html>
