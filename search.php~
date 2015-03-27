<?php

$mysqli=new mysqli("localhost","root","1397","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}

$txt=$_POST['txt'];

$sql="SELECT * FROM search where title='$txt'";
if($result=$mysqli->query($sql))
{
while($row=$result->fetch_array())
{
echo "<br>";
echo '<a href=  "'.$row[1].'" target="_blank"  >' . $row[0] . '</a>';
}
$result->close();
}
else
{
echo"no records matching";
}

$mysqli->close();
?>
<html>
<head>
<title></title>
</head>
<body>

</body>
</html>
