<?php session_start(); 
	include 'include/connection.php'; 
	if(!isset($_POST['login']) and !isset($_SESSION['username']))
		{
		echo "<script>window.location='index.php';</script>";
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Home</title>
		<link href="css/profile.css" rel="stylesheet" type="text/css" />
		<script>
				function fun()
				{
					var a=document.getElementById('area').innerHTML;
					alert(a);
					window.location='abc.php?a='+a;
				}
		</script>
</head>
<body id="body" bgcolor="fff8c6">
	

	<?php include 'include/link.php';?>
	<div id="main"><br/>
			<div id="area">
				<!--<div id="logo">
						<img src="images/logo.png" width="207" height="162" border="0" usemap="#Map" />
						<map name="Map" id="Map">
								<area shape="circle" coords="104,80,80" href="index.php" />
						</map>	
				</div>-->
				<div id="college" >
						<a href="index.php"><img src="images/gne.jpg" width="100%" height="170" /></a>
				</div>
			</div>

		<div id="main" style="text-align:center;">
				<h2><center>Edit Records</center></h2>
				<form action="" method="post">
					<table cellspacing="15" cellpadding="5" style="text-align:left;">
						<tbody>
								<tr> 
										<td> <h3>Conferences Attended:</h3></td>
										<td>	<select id="ca" name="ca" class="txt2">
													<option value="1"> 1 </option>
													<option value="2"> 2 </option>
													<option value="3"> 3 </option>
													<option value="4"> 4 </option>
													<option value="5"> 5 </option>
												</select>
										</td>
										<td>
												<input type="submit" name="caadd" value="Add Rows" class="btn" /> 
												<input type="submit" name="conA" value="Update"  class="btn"/>
										</td>
								</tr>
								
			<?php 	
				if(isset($_POST['caadd']) && isset($_POST['ca']))
				{
					$fields=$_POST['ca'];
					for($i=1; $i <=  $fields; $i++)
					{
						echo '<tr>
										<td></td><td colspan="2">
									<input type="text" class="txt2" style= "width:100px;" value ="title" name= "ca_title'.$i.'">
									<select id="ca_nature'.$i.'" name=ca_nature'.$i.' class="txt2" style= "width:100px;">
											<option value="IC">IC</option> 
											<option value="STP">STP</option> 
											<option value="NC">NC</option>
									</select>
							
									<input type="text" class="txt2" style= " width:100px;" value ="organized by" name= "ca_org'.$i.'">
							
									<select id="ca_yr'.$i.'" name=ca_yr'.$i.' class="txt2" style= "width:100px;">
											<option value="Year" selected="selected"> Year </option>'; 
											for($j=1990 ; $j<=2012; $j++){
													echo '<option value="'.$j.'">'.$j.'</option>'; 
												}
							echo '</select>
								</td></tr>';						
						
					}
				}
			?>										
					
			
		</form>
       
       
		<form action="" method="post">
				<tr>
						<td>
							<h3>Expert Talk:</h3>
						</td>
						<td> 
								<select id="et" name="et" class="txt2">
										<option value="1"> 1 </option>
										<option value="2"> 2 </option>
										<option value="3"> 3 </option>
										<option value="4"> 4 </option>
										<option value="5"> 5 </option>
								 </select>
						</td>
						<td>
								<input type="submit" name="etadd" value="Add Rows" class="btn"/>
								<input type="submit" name="expT" value="Update" class="btn"/>
						</td>
					</tr>
					
			<?php 
				if(isset($_POST['etadd']) && isset($_POST['et']))
				{
					$fields=$_POST['et'];
					for($i=1; $i <=  $fields; $i++)
					{
						echo '<tr>
									<td></td>
									<td colspan="5">
										<input type="text" class="txt2" style= " width:100px;" placeholder= "title" name= "et_title'.$i.'">
										<input type="text" class="txt2" style= " width:100px;" placeholder= "organization" name= "et_org'.$i.'">
										<input type="text" class="txt2" style= " width:150px;" placeholder = "yyyy-mm-dd" name= "et_yr'.$i.'">
									</td>
							</tr>';
					}
				}
			?>
         
      </form>
      <form action="" method="post">
        		<tr>
					<td><h3>Research Publications:</h3></td>
					<td>	
							<select id="rp" name="rp" class="txt2">
									<option value="1"> 1 </option>
									<option value="2"> 2 </option>
									<option value="3"> 3 </option>
									<option value="4"> 4 </option>
									<option value="5"> 5 </option>
							</select>
					</td>
					<td>
								<input type="submit" name="rpadd" value="Add Rows" class="btn"/>
								<input type="submit" name="reP" value="Update" class="btn" />
					</td>
				</tr>
			<?php 
				if(isset($_POST['rpadd']) && isset($_POST['rp']))
				{
					$fields=$_POST['rp'];
					for($i=1; $i <=  $fields; $i++)
					{
						echo '<tr>
								<td></td>
								<td colspan="5">
										<select id="rp_nature'.$i.'" name=rp_nature'.$i.' class="txt2">
												<option value="International Journal">International Journal</option> 
												<option value="National Journal">National Journal</option> 
												<option value="International Conference">International Conference</option>
												<option value="National Conference">National Conference</option>
										</select>
						
										<input type="text" class="txt2" style= " width:100px;" value ="details" name= "rp_details'.$i.'">
								</td>
							</tr>';
						
					}
				}
			?>
				
			</form>
			<form action="" method="post">
				<tr>
						<td><h3>Thesis Guided:</h3></td>
						<td>
								<select id="tg" name="tg" class="txt2">
										<option value="1"> 1 </option>
										<option value="2"> 2 </option>
										<option value="3"> 3 </option>
										<option value="4"> 4 </option>
										<option value="5"> 5 </option>
								</select>
						</td>
						<td>
								<input type="submit" name="tgadd" value="Add Rows" class="btn"/>
								<input type="submit" name="theG" value="Update" class="btn"/>
						</td>
				</tr>
				<?php 
					if(isset($_POST['tgadd']) && isset($_POST['tg']))
					{
						$fields=$_POST['tg'];
						for($i=1; $i <=  $fields; $i++)
						{
							echo '<tr>
										<td></td>
										<td colspan="8">
											<input type="text" class="txt2"  style= " width:100px;" value ="title" name= "tg_title'.$i.'">
											<input type="text" class="txt2"  style= " width:100px;" value ="name of student" name= "tg_name'.$i.'">
											<select id="tg_sup'.$i.'" name=tg_sup'.$i.' class="txt2"  style= " width:100px;"> 
														<option value="Supervisor">Supervisor</option> 
														<option value="Co-Supervisor">Co-Supervisor</option> 
														<option value="NC">NC</option>
											</select>
											<select id="tg_yr'.$i.'" name=tg_yr'.$i.' class="txt2"  style= " width:100px;">
													<option value="Year" selected="selected"> Year </option>'; 
													for($j=1990 ; $j<=2012; $j++)
														{
															echo '<option value="'.$j.'">'.$j.'</option>'; 
														} 
										echo '</select>
										</td>
									</tr>';						
						}
					}
				?>
    </form>    
    <form action="" method="post">
				<tr>
						<td><h3>Journals:</h3></td>
						<td>
							<select id="jr" name="jr" class="txt2">
									<option value="1"> 1 </option>
									<option value="2"> 2 </option>
									<option value="3"> 3 </option>
									<option value="4"> 4 </option>
									<option value="5"> 5 </option>
							</select>
						</td>
						<td>
							<input type="submit" name="jradd" value="Add Rows" class="btn"/>
							<input type="submit" name="journal" value="Update" class="btn"/>
						</td>
			<?php 
				if(isset($_POST['jradd']) && isset($_POST['jr']))
				{
					$fields=$_POST['jr'];
					for($i=1; $i <=  $fields; $i++)
					{
						echo '</br></br><input type="text" style= " width:150px;" value ="title" name= "jr_title'.$i.'">';
						echo '&nbsp;&nbsp;<input type="text" style= " width:150px;" value ="affil. college" name= "jr_clg'.$i.'">';
						echo '</br></br><input type="text" style= " width:150px;" value ="Along with" name= "jr_along'.$i.'">';
						echo '&nbsp; &nbsp;<input type="text" style= " width:150px;" value ="Paper Name" name= "jr_ppr'.$i.'">';
						echo '</br></br><select id="jr_vol'.$i.'" name=jr_vol'.$i.'>'; for($j=1 ; $j<=10; $j++){ echo '<option value="Vol.'.$j.'">Vol.'.$j.'</option>'; } echo '</select>';						
						echo '</br></br><select id="jr_issue'.$i.'" name=jr_issue'.$i.'>'; for($j=1 ; $j<=10; $j++){ echo '<option value="Issue'.$j.'">Issue'.$j.'</option>'; } echo '</select>';						
						echo '&nbsp;&nbsp;<input type="text" style= " width:150px;" value ="venue" name= "jr_ven'.$i.'">';
						echo '</br></br><input type="text" style= " width:150px;" value ="Page No." name= "jr_pg'.$i.'">';
						echo '&nbsp;&nbsp;<input type="text" style= " width:150px;" value ="ISSN No." name= "jr_issn'.$i.'">';
						echo '&nbsp;&nbsp;<select id="jr_nature'.$i.'" name=jr_nature'.$i.'> <option value="IC">IC</option> <option value="IJ">IJ</option> <option value="NJ">NJ</option> <option value="STP">STP</option> <option value="NC">NC</option></select>';

						echo '</br></br><select id="jr_month'.$i.'" name=jr_month'.$i.'><option value="Year" selected="selected"> Month </option>'; for($j=1 ; $j<=12; $j++){ echo '<option value="'.$j.'">'.$j.'</option>'; } echo '</select>';						
						echo '</br></br><select id="jr_yr'.$i.'" name=jr_yr'.$i.'><option value="Year" selected="selected"> Year </option>'; for($j=1990 ; $j<=2012; $j++){ echo '<option value="'.$j.'">'.$j.'</option>'; } echo '</select>';						
					}
				}
			?>
         
       
</td></tr></tbody></table>
    </form>


		</div>
	</div>
</body>
</html>
			<?PHP
			
if(isset($_POST['expT']))
{
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	$fields=$_POST['et'];
	
	for($i=1; $i <=  $fields; $i++)
	{
		$et_title = $_POST['et_title'.$i];
		$et_org = $_POST['et_org'.$i];
		$et_yr = $_POST['et_yr'.$i];			
		$sql="INSERT into expert_talk (username,title,organization,year) VALUES('$username','$et_title','$et_org','$et_yr')";
	
			if($mysqli->query($sql))
				{
						echo "Add Successfully";			
				}
			else{
						echo "Error: Could not execute $sql.".$mysqli->error;
				}
	}
}
			
if(isset($_POST['journal']))
{
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
					
				if($mysqli->query($sql))
					{
							echo "Add Successfully";			
					}
				else{
					echo "Error: Could not execute $sql.".$mysqli->error;
					}
			}
}
if(isset($_POST['reP']))
{
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
				$fields=$_POST['rp'];
				for($i=1; $i <=  $fields; $i++)
				{
						$rp_nature = $_POST['rp_nature'.$i];
						$rp_details = $_POST['rp_details'.$i];
						$sql="INSERT into research (username,nature,details) VALUES('$username','$rp_nature','$rp_details')";
					
					if($mysqli->query($sql))
						{
								echo "Add Successfully";			
						}
					else{
						echo "Error: Could not execute $sql.".$mysqli->error;
						}
				}
}		
if(isset($_POST['theG']))
{
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
					if($mysqli->query($sql))
					{
							echo "Add Successfully";			
					}
				else{
					echo "Error: Could not execute $sql.".$mysqli->error;
					}
			}
}
if(isset($_POST['conA']))
		{
			$username=$_SESSION['username'];
			$password=$_SESSION['password'];
							$fields=$_POST['ca'];
			for($i=1; $i <=$fields; $i++)
			{
								$ca_title = $_POST['ca_title'.$i];
								$ca_nature= $_POST['ca_nature'.$i];
								$ca_org = $_POST['ca_org'.$i];
								$ca_yr = $_POST['ca_yr'.$i];
								$sql="INSERT into conference (username,title,nature,organized_by,year) VALUES('$username','$ca_title','$ca_nature','$ca_org','$ca_yr')";
							if($mysqli->query($sql))
					{
							echo "Add Successfully";			
					}
				else{
					echo "Error: Could not execute $sql.".$mysqli->error;
					}
			}
	}
?>
