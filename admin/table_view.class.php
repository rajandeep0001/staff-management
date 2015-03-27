<?php
		
		function conn($host,$user,$pass,$db)
		{
			$con=mysql_connect($host,$user,$pass);
			if(!$con)
				{
					echo mysql_error();
				}
			mysql_select_db($db);
		
		}
		function grid($table)
		{
			$sql="select * from ".$table."";
			$result=mysql_query($sql);
			echo '<table cellpadding="20" border="1">';
				echo '<tr>';
				$t=0;
				$fields="";
				while($ty=mysql_fetch_field($result))
					{
						if($t==0)
							{
							$xyz=$ty->name;
							$t=10;
							}
							$fields=$fields.$ty->name.",";
							
						echo '<th>'.$ty->name.'</th>';
					}
							echo '<th>Edit</th>';
							echo '<th>Delete</th>';
				echo '</tr>';
			
				$r=mysql_num_fields($result);
				while($row=mysql_fetch_array($result))
					{
							echo '<tr>';
										for($i=0;$i<$r;$i++)
											{
											echo '<td>'.$row[$i].'</td>';
											}
										echo'<td><a href="?p='.$row[0].'">Edit</a></td>'; 
										echo'<td><a href="?d='.$row[0].'">delete</a></td>'; 
										
							echo '</tr>';
					
					}

			echo '</table>';
			if(isset($_GET['p']))
				{
						echo $sql123="select * from ".$table." where ".$xyz."='".$_GET['p']."'";
						$result123=mysql_query($sql123);
						echo '<form method="post">';
						while($row123=mysql_fetch_array($result123))
							{
									for($i=1;$i<$r;$i++)
									{
										echo '<input type="text" name="'.$i.'" value="'.$row123[$i].'"><br/>';
									}
									
							}
								echo'<input type="submit" value="Update" name="up"/>';
						echo '</form>';
								
											
				}
				if(isset($_POST['up']))
					{
						$fields=explode(",",$fields);
						$sql_up="update ".$table." set `".$fields[1]."`='$_POST[1]'";
								for($i=2;$i<$r;$i++)
										{
											$sql_up=$sql_up.", `".$fields[$i]."`='$_POST[$i]' ";
										}
										
					
						echo $sql_up=$sql_up." where ".$xyz."='$_GET[p]'";
						if(mysql_query($sql_up))
						{
							echo '<script>window.location="?";</script>';
						}
					}
			if(isset($_GET['d']))
				{
					//echo $xyz;
						$sql="delete from ".$table." where ".$xyz."='$_GET[d]'";
						mysql_query($sql);
				}
			
		
		}
?>







