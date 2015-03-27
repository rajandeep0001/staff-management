<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center><b><h3>Journals By Staff</b></h3>
<table cellspacing="10" cellpadding="10" width="667">
         <tr>
           <th align="left">Name</th>
           <th align="left">Title</th>
           <th align="left">Affil. College</th>
           <th align="left">Along With</th>
           <th align="left">Paper Name</th>
           <th align="left">Vol.</th>
           <th align="left">Nature</th>
           <th align="left">Page No.</th>
           <th align="left">Issue No.</th>
           <th align="left">ISSN No.</th>
           <th align="left">Venue</th>
           <th align="left">Month</th>
           <th align="left">Year</th>
         </tr>
         <?php
$mysqli=new mysqli("localhost","root","1397","faculty");
if($mysqli==false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}



$sql = "SELECT * from journal" ;
if($result=$mysqli->query($sql))
{
	if($result-> num_rows>0)
{
while($row=$result->fetch_array())
{
	echo '<tr><td width="100"> '.$row[0].' </td><td width="300"> '.$row[1].' </td><td width="100"> '.$row[2].'</td><td width="200"> '.$row[3].'</td><td width="300"> '.$row[4].'</td><td width="50"> '.$row[5].'</td><td width="60"> '.$row[6].'</td><td width="60"> '.$row[7].'</td><td width="100"> '.$row[8].'</td><td width="60"> '.$row[9].'</td><td width="200"> '.$row[10].'</td><td width="40"> '.$row[11].'</td><td width="40"> '.$row[12].'</td></tr>';
	
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
