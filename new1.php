<?php
if(isset($_POST['login']))
{
$mysqli=new mysqli("localhost","root","1397","faculty");
if ($mysqli===false)
	{
	die("Cant connect to database.". mysqli_connect_error());
	}
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	include("AkshayGirdhar.php");		

$sql="SELECT * FROM profile where username='".$username."' and password='".$password."'";

if($result=$mysqli->query($sql))
{
if($result->num_rows>0)
	{

			echo "login successful";

	}
	else
		{
		echo "No Records Matching";
		}
}
else {
	echo "Error: Could not execute $sql.".$mysali->error;
	}

$mysqli->close();
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faculty Profile</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="jquery.mins.js"></script>

<style type="text/css">

#myreel{ /*sample CSS for demo*/
border:3px solid gray;
position:absolute;
}

.paginate{
width: 330px;
margin-top:5px;
font:bold 14px Arial;
text-align:center;
}

.style1 {
	font-size: 24px;
	font-weight: bold;
}
</style>

<script src="reelslideshow.js" type="text/javascript">

/***********************************************
* Continuous Reel Slideshow- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

</script>

<script type="text/javascript">

var firstreel=new reelslideshow({
	wrapperid: "myreel", //ID of blank DIV on page to house Slideshow
	dimensions: [300, 347], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["images/1.jpg", "AkshayGirdhar.php"], //["image_path", "optional_link", "optional_target"]
		["images/2.jpg", "KulwinderSinghMann.php"],
		["images/3.jpg", "AmitKamra.php"],
		["images/4.jpg", "GurpreetSGrewal"],
		["images/5.jpg", "HarbhagSSohal"],
		["images/6.jpg", "JaspreetKaur"],
		["images/7.jpg", "KamaljitKDhillon"],
		["images/8.jpg", "KiranJyoti"],
		["images/9.jpg", "ManjotKGill"],
		["images/10.jpg", "ManpreetSingh"],
		["images/11.jpg", "PankajBhambri"],
		["images/12.jpg", "ParminderKWadwa"],
		["images/13.jpg", "PriyankaArora"],
		["images/14.jpg", "RaninderKaur"],
		["images/15.jpg", "RanjodhKaur"],
                ["images/15.jpg", "Arunjot kaur Brar"]
 //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:2000, cycles:2, pauseonmouseover:true},
	orientation: "v", //Valid values: "h" or "v"
	persist: true, //remember last viewed slide and recall within same session?
	slideduration: 300 //transition duration (milliseconds)
})

</script>

</head>

<body bgcolor="fff8c6">



<div id="area">


  <div id="logo"><img src="images/logo.png" width="207" height="162" border="0" usemap="#Map" />
<map name="Map" id="Map">
  <area shape="circle" coords="103,80,76" href="index.php" />
</map></div>
  <div id="login">
  	<p>
  <input type="text" title="username" name="username" />
  </p>
  	<p>
  	  <input type="password" title="password" name="password" />
  	</p>
  	<p>
  	  <input type="button" title="login" name="login" value="Login"  />
      </p>
  </div>
  <div id="college"><img src="images/gne.jpg" width="772" height="170" /></div>
  
  <div class="style1" id="deptt">Department of Information Technology</div>
  
  <div id="reel">  
	<div id="myreel"></div>
		<div class="paginate">
		<a href="javascript:firstreel.navigate('back')" style="margin-right:200px;"> << </a>  <a href="javascript:firstreel.navigate('forth')"> >> </a>
</div>
  
	</div>
</div>
</body>
</html>
