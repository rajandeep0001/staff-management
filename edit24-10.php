
<?php
			
if(isset($_POST['save']))
{
$mysqli=new mysqli("localhost","root","1397","faculty");
if ($mysqli===false)
	{
	die("Cant connect to database.". mysqli_connect_error());
	}
	session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$designation=$_POST['designation'];
	$research_interest=$_POST['research_interest'];
	$office_address=$_POST['office_address'];
	$contact_no=$_POST['contact_no'];
	$e_id=$_POST['e_id'];
		
		
	$sql="UPDATE profile SET name = '".$name."', dob = '".$dob."', designation ='".$designation."', office_address ='".$office_address."' , e_id ='".$e_id."' , contact_no ='".$contact_no."' , research_interest = '".$research_interest."' WHERE  username='".$username."'";
	
	
		$sql="INSERT into expert_talk (username,title,organization,year) VALUES('$username','$et_title','$et_org','$et_yr')";
	
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

/*$mysqli->close();
*/
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
          			<td><span class="style5"><strong>Name:</strong></span></td>
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
            
            <?php /*?><?php 
                if(isset($_POST['etadd']) && isset($_POST['et']))
                {
                    $et_fields=$_POST['et'];
                    for($i=1; $i <=  $et_fields; $i++)
                    {
                        echo '</br><input type="text" style="width:150px;" name="et_title.'$i'." value="title"  />';
                        echo ' &nbsp; &nbsp;<input type="text" style="width:150px;" name="et_org.'$i'." value ="organization" />';
                        echo '&nbsp; &nbsp;<input type="text" style="width:150px;" name="et_yr.'$i'." value = "year"/>';
                    }
                }
            ?><?php */?>
         
          </span>
         </td>
        <tr>
        	<td> 			<input type="submit" name="save" value="Save" />
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
