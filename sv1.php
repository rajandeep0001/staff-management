<?php
$mysqli = new mysqli("localhost", "root", "1397", "faculty");
if(mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}
/*$username = KulwinderSMann;
*/$sql = "SELECT * from expert_talk WHERE username = '$username'";
if($result=$mysqli->query($sql))
{
if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{

echo "working";
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
