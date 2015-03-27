<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<table align="center" border="2" style="width:80%; border-style:outset; border:medium;">
<tr>
<th>NAME</th>
<th>PASSWORD</th>
<th>CLASS</th>

</tr>

<?php
$mysqli=new mysqli("localhost","root","1397","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}
$sql = "SELECT * from expert_talk";
if($result=$mysqli->query($sql))
{
	if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{
	echo '<tr><td> '.$row[1].' </td><td> '.$row[2].'</td><td> '.$row[3].' </td></tr>';
	
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

</body>
</html>
