
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
	

	
	if(isset($_POST['et']))
				{
					$fields=$_POST['et'];
					
					for($i=1; $i <=  $fields; $i++)
					{
						$et_title = $_POST['et_title'.$i];
						$et_org = $_POST['et_org'.$i];
						$et_yr = $_POST['et_yr'.$i];			
						$sql="INSERT into expert_talk (username,title,organization,year) VALUES('$username','$et_title','$et_org','$et_yr')";
					}
	}
	
	if(isset($_POST['rp']))
				{
					$fields=$_POST['rp'];
					
					for($i=1; $i <=  $fields; $i++)
					{
						$rp_nature = $_POST['rp_nature'.$i];
						$rp_details = $_POST['rp_details'.$i];
						
						$sql="INSERT into research (username,nature,details) VALUES('$username','$rp_nature','$rp_details')";
					}
					
	}
	if(isset($_POST['tg']))
				{
					$fields=$_POST['tg'];
					
					for($i=1; $i <=  $fields; $i++)
					{
						$tg_title = $_POST['tg_title'.$i];
						$tg_name = $_POST['tg_name'.$i];
						$tg_sup = $_POST['tg_sup'.$i];
						$tg_yr = $_POST['tg_yr'.$i];

						$sql="INSERT into research (username,title,name,supervisor,year) VALUES('$username','$tg_title','$tg_name','$tg_sup','tg_yr')";
					}
	}
	if(isset($_POST['ca']))
				{
					$fields=$_POST['ca'];
					
					for($i=1; $i <=  $fields; $i++)
					{
						$ca_title = $_POST['ca_title'.$i];
						$ca_nature= $_POST['ca_nature'.$i];
						$ca_org = $_POST['ca_org'.$i];
						$ca_yr = $_POST['ca_yr'.$i];

						$sql="INSERT into conferences (username,title,nature,organized_by,year) VALUES('$username','$ca_title','$ca_nature','$ca_org','ca_yr')";
					}
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
<title>Akshay Girdhar</title>
<link href="style.css" rel="stylesheet" type="text/css" />


<style type="text/css">
<!--

#area
{
	width:1049px;
	height:736px;
	position:absolute;
	left: 161px;
	top: 20px;
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

	<div id="college"><img src="images/gne.jpg" width="772" height="170" />
    </div>
  
  	<div class="style1" id="info">
	  <div align="center" class="style8">Department of Information Technology</div>
    	<p align="left" class="style2"><a name="PI">Personal Information</a></p>
    
   		<form action="" method="post">
   
   		  <table cellspacing="15" cellpadding="5">
      		<tbody>
        		<tr>
          			<?php /*?><td><span class="style5"><strong>Name:</strong></span></td>
          			<td><span class="style5">
                 
          			<input type="text" name="name" value="<?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}

session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
	
$sql="SELECT * FROM profile where username='".$username."'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[3];


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
$mysqli->close();
?> ">
          
          
     		     </span></td>
        		</tr>
        		<tr>
          			<td><span class="style5"><strong>Date of Birth:</strong></span></td>
          			<td><span class="style5">
            		<input type="text" name="dob" value="<?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}

session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
$sql="SELECT * FROM profile where username='".$username."'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[4];


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
$mysqli->close();
?>"  />
					(yyyy/mm/dd)          </span></td>
   			  </tr>
        			<tr>
          				<td><span class="style5"><strong>Designation:</strong></span></td>
          				<td><span class="style5">
            			<input type="text" name="designation" style="width:250px;" value="<?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}

session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	

$sql="SELECT * FROM profile where username='".$username."'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[5];


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
$mysqli->close();
?>"  />
          		</span></td>
        		</tr>
        		<tr>
          			<td><span class="style5"><strong>Research Interest:</strong></span></td>
          			<td><span class="style5">
       				<input type="text" name="research_interest" style="width:250px;" value="<?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}

session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
$sql="SELECT * FROM profile where username='".$username."'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[8];


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
$mysqli->close();
?>"  />
          		</span></td>
        		</tr>
      		    <tr>
          			<td><span class="style10">Office Address:</span></td>
          			<td><span class="style5">
          				<input type="text" name="office_address" style="width:250px;" value="<?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}

session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
$sql="SELECT * FROM profile where username='".$username."'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[9];


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
$mysqli->close();
?>" />
          </span></td>
        </tr>
        <tr>
          <td><span class="style5"><strong>Contact Number:</strong></span></td>
          <td><span class="style5">
          <input type="text" name="contact_no" style="width:250px;" value="<?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}

session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
$sql="SELECT * FROM profile where username='".$username."'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[10];


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
$mysqli->close();
?> " />
          </span></td>
        </tr>
        <tr>
          <td><span class="style5"><strong>Email Id:</strong></span></td>
          <td><span class="style5">
          <input type="text" name="e_id" style="width:250px;" value="<?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}

session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
$sql="SELECT * FROM profile where username='".$username."'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[11];


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
$mysqli->close();
?> " />
          </span></td>
        </tr>
        <tr><?php */?>
       
       <form action="" method="post">
   
   		  <table cellspacing="15" cellpadding="5">
      		<tbody>
        		<tr>
        <td><span class="style5"><strong>Conferences Attended:</strong></span></td>
          <td><span class="style5">
          	<select id="ca" name="ca">
          		<option value="1"> 1 </option>
          		<option value="2"> 2 </option>
          		<option value="3"> 3 </option>
        		<option value="4"> 4 </option>
          		<option value="5"> 5 </option>
          	</select>
          	
            <input type="submit" name="caadd" value="Add Rows" />
          	
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
         </td>
         </tr>
        <tr>
        	<td> 			<input type="submit" name="conA" value="Update" />
</td>
 </tr>
        </tbody>
        </table>
        </form>
        <tr>
        
          <td><span class="style5"><strong>Expert Talk:</strong></span></td>
          <td><span class="style5">
          	<select id="et" name="et">
          		<option value="1"> 1 </option>
          		<option value="2"> 2 </option>
          		<option value="3"> 3 </option>
        		<option value="4"> 4 </option>
          		<option value="5"> 5 </option>
          	</select>
          	
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
         
          </span>
         </td>
         </tr>
         <tr>
        	<td> 			<input type="submit" name="expT" value="Update" />
</td>
 </tr>
         </tbody>
         </table>
         </form>
         <form action="" method="post">
   
   		  <table cellspacing="15" cellpadding="5">
      		<tbody>
       <tr>
         <td><span class="style5"><strong>Research Publications:</strong></span></td>
          <td><span class="style5">
          	<select id="rp" name="rp">
          		<option value="1"> 1 </option>
          		<option value="2"> 2 </option>
          		<option value="3"> 3 </option>
        		<option value="4"> 4 </option>
          		<option value="5"> 5 </option>
          	</select>
          	
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
         
          </span>
         </td>
         </tr>
         </tr>
         <tr>
        	<td> 			<input type="submit" name="reP" value="Update" />
</td>
 </tr>
         </tbody>
         </table>
         <form action="" method="post">
   
   		  <table cellspacing="15" cellpadding="5">
      		<tbody>
        		
          <tr>
         <td><span class="style5"><strong>Thesis Guided:</strong></span></td>
          <td><span class="style5">
          	<select id="tg" name="tg">
          		<option value="1"> 1 </option>
          		<option value="2"> 2 </option>
          		<option value="3"> 3 </option>
        		<option value="4"> 4 </option>
          		<option value="5"> 5 </option>
          	</select>
          	
            <input type="submit" name="tgadd" value="Add Rows" />
          	
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
         
          </span>
         </td>
         </tr>
         
        
        <tr>
        	<td> 			<input type="submit" name="theG" value="Update" />
</td>
 </tr>
      </tbody>
    </table><br />
    
    </form>

  </div>
 

 
 <div id="logout1">
 <form action="logout.php">
 <input type="submit" name="logout" value="Logout" />
 </form></div>


</div>
 
</body>
</html>
