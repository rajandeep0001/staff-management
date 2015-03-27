
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
			
if(isset($_POST['journal']))
{
$mysqli=new mysqli("localhost","root","","faculty");
if ($mysqli===false)
	{
	die("Cant connect to database.". mysqli_connect_error());
	}
	session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
	
	
	
					$fields=$_POST['jr'];
					
					for($i=1; $i <=  $fields; $i++)
					{
						$jr_title = $_POST['jr_title'.$i];
						$jr_clg = $_POST['jr_clg'.$i];
						$jr_along = $_POST['jr_along'.$i];
						$jr_ppr = $_POST['jr_ppr'.$i];
						$jr_vol = $_POST['jr_vol'.$i];
						$jr_ven = $_POST['jr_ven'.$i];
						$jr_pg = $_POST['jr_pg'.$i];
						$jr_nature = $_POST['jr_nature'.$i];
						$jr_issue = $_POST['jr_issue'.$i];
						$jr_month = $_POST['jr_month'.$i];
						$jr_yr = $_POST['jr_yr'.$i];
						$jr_issn = $_POST['jr_issn'.$i];
						$sql="INSERT into journal (username,title,college,along_with,paper,vol,venue,page,nature,issue,issn,month,year) VALUES('$username','$jr_title','$jr_clg','$jr_along','$jr_ppr','$jr_vol','$jr_ven','$jr_pg','$jr_nature','$jr_issue','$jr_issn','$jr_month','$jr_yr')";
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
