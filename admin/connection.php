<?php	$mysqli=new mysqli("localhost","root","","faculty");
		if($mysqli==false)
		{
				die("ERROR:could not connect.".mysqli_connect_error());
		}
		?>