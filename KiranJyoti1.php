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
	height:1833px;
	position:absolute;
	left: 161px;
	top: 20px;
	border:2px;
	border:#333333;
	}
#info
{
	width:684px;
	height:1637px;
	position:absolute;
	left: 18px;
	top: 187px;
}

#inline1
{
	width:303px;
	height:300px;
	position:absolute;
	left: 708px;
	top: 400px;
}


.style1 {font-size: 16px}
.style2 {
	font-size: 20px;
	color: #2E3F6D;
	font-weight: bold;
}
.style5 {
	font-size: 16px;
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


  <!--<div id="logo"><img src="images/logo.png" width="207" height="162" border="0" usemap="#Map" />
	<map name="Map" id="Map">
	  <area shape="circle" coords="104,80,80" href="index.php" />
	</map>
  </div>-->
  
  <div id="college" style="width:100%;margin-left:-20px;">
  <a href="index.php"><img src="images/gne.jpg" width="100%" height="170" /></a></div>
  
  <div id="photo"><img src="images/8.jpg" width="300" height="347" /></div>
  
  <div class="style1" id="info">
    <div align="center" class="style8">Department of Information Technology</div>
    <p align="left" class="style2"><a name="PI">Personal Information</a></p>
    
    <table cellspacing="15" cellpadding="5">
      <tbody>
        <tr>
          <td><span class="style5"><strong>Name:</strong></span></td>
          <td><span class="style5">
            <?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}


$sql="SELECT * FROM profile where id='3'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[3]. "<br>";


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
?>
          </span></td>
        </tr>
        <tr>
          <td><span class="style5"><strong>Date of Birth:</strong></span></td>
          <td><span class="style5">
            <?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}


$sql="SELECT * FROM profile where id='3'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[4]. "<br>";


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
?>
(yyyy/mm/dd)          </span></td>
        </tr>
        <tr>
          <td><span class="style5"><strong>Designation:</strong></span></td>
          <td><span class="style5">
            <?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}


$sql="SELECT * FROM profile where id='3'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[5]. "<br>";


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
?>
          </span></td>
        </tr>
        <tr>
          <td><span class="style5"><strong>Experience:</strong></span></td>
          <td><span class="style5">
            <?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}


$sql="SELECT * FROM profile where id='3'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[6]. "<br>";


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
?>
            <br />
          </span></td>
        </tr>
        <tr>
          <td><span class="style5"><strong>Qualifications:</strong></span></td>
          <td><span class="style5">
            <?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}


$sql="SELECT * FROM profile where id='3'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[7]. "<br>";


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
?>
            <br />
          </span></td>
        </tr>
        <tr>
          <td><span class="style5"><strong>Research Interest:</strong></span></td>
          <td><span class="style5">
            <?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}


$sql="SELECT * FROM profile where id='3'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[8]. "<br>";


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
?>
          </span></td>
        </tr>
      </tbody>
    </table><br />

    <p align="left" class="style2"><a name="CI">Contact Information</a></p>
    <table cellspacing="15" cellpadding="5">
      <tbody>
        <tr>
          <td><span class="style10">Office Address:</span></td>
          <td><span class="style5">
            <?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}


$sql="SELECT * FROM profile where id='3'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[9]. "<br>";


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
?>
          </span></td>
        </tr>
        <tr>
          <td><span class="style5"><strong>Contact Number:</strong></span></td>
          <td><span class="style5">
            <?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}


$sql="SELECT * FROM profile where id='3'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[10]. "<br>";


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
?>
          </span></td>
        </tr>
        <tr>
          <td><span class="style5"><strong>Email Id</strong></span></td>
          <td><span class="style5">
            <?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}


$sql="SELECT * FROM profile where id='3'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[11]. "<br>";


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
?>
          </span></td>
        </tr>
      </tbody>
    </table><br />

    <p align="left" class="style2"><a name="TL">Teaching Load</a></p>
    <table cellspacing="15" cellpadding="5" border="2px">
      <tbody>
        <tr bordercolor="#666666">
          <td><span class="style10">Subjects Being Taught</span></td>
          <td><p align="center" class="style10">Teaching Load</p>
              <p class="style10">L&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MC</p></td>
          <td><span class="style10">Total Load</span></td>
        </tr>
        <tr>
          <td><table width="157">
              <tr>
                <td><span class="style5">BIS (CS-526)</span></td>
              </tr>
              <tr>
                <td><span class="style5">OOPS LAB (CS-254)</span></td>
              </tr>
              <tr>
                <td><span class="style5">Project(IT-410)</span></td>
              </tr>
          </table></td>
          <td><table width="181">
              <tr>
                <td><div align="left" class="style5">4</div></td>
                <td><div align="left" class="style5">-</div></td>
                <td><span class="style5">-</span></td>
              </tr>
              <tr>
                <td><div align="left" class="style5">-</div></td>
                <td><div align="left" class="style5">4</div></td>
                <td><span class="style5">-</span></td>
              </tr>
            <tr>
                <td><div align="left" class="style5">-</div></td>
              <td><div align="left" class="style5">2</div></td>
              <td><span class="style5">-</span></td>
            </tr>
              <tr> </tr>
          </table></td>
          <td><div align="center"><span class="style5">10</span> </div></td>
        </tr>
      </tbody>
    </table>
    <br />
    <p align="left" class="style2"><a name="CSWS">Conferences/Seminars/Winter/Summer Schools Attended<br />(Last 3 Years)</a></p>
       <span class="style5">
       <?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}


$sql="SELECT * FROM profile where id='3'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[12]. "<br>";


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
?>
       </span><br />
    <p align="left" class="style2"><a name="RP">Research Publications (Last 3 Years)</a></p>
    
 <span class="style5">
    <?php

$mysqli=new mysqli("localhost","root","","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}


$sql="SELECT * FROM profile where id='3'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{


echo $row[14]. "<br>";


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
?>
</span><br />
    <br />
  </div> 
  <div id="inline1">
  <ul type="circle">
  	<li><a href="#PI">Personal Information</a><br /></li>
  	<li><a href="#CI">Contact Information</a><br /></li>
  	<li><a href="#TL">Teaching Load</a><br /></li>
  	<li><a href="#CSWS">Conferences/Seminars/Winter/Summer Schools Attended (Last 3 Years)</a><br /></li>
  	<li><a href="#ET">Expert Talks Delivered (Last 3 Years)</a><br /></li>
 	<li><a href="#RP">Research Publications (Last 3 Years)</a><br /></li>
	<li><a href="#TG">M.Tech Thesis Guided (Last 3 Years)</a><br /></li>
   </ul>
  </div>
</div>



</body>
</html>
