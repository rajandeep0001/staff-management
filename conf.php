<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center><b><h3>Conferences Attended By Staff</b></h3>
<table cellspacing="5" cellpadding="5" width="667">
         <tr>
           <th align="left">Name</th>
           <th align="left">Title</th>
           <th align="left">Nature</th>
           <th align="left">Organized By</th>
           <th align="left">Year</th>
         </tr>
         <?php
$mysqli=new mysqli("localhost","root","1397","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}



$sql = "SELECT * from conference" ;
if($result=$mysqli->query($sql))
{
	if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{
	echo '<tr><td width="170"> '.$row[0].' </td><td width="170"> '.$row[1].' </td><td width="100"> '.$row[2].'</td><td width="200"> '.$row[3].' </td><td width="73"> '.$row[4].' </td></tr>';
	
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
       </table>
       
</body>
</html>
