<?php 
	$_SESSION['content1']="";
	$_SESSION['content2']="";
	$_SESSION['content3']="";
	$_SESSION['content4']="";
	$_SESSION['content5']="";
	$_SESSION['content6']="";
	$_SESSION['content7']="";
	$_SESSION['content8']="";
	$_SESSION['content9']="";
		$sql="SELECT * FROM profile where `id`='{$_SESSION['id']}'";
		if($result=$mysqli->query($sql))
		{
			if($result-> num_rows>0)
			{
				while($row=$result->fetch_array())
				{	
echo '	<div id="area">
		<!--<div id="logo">
				<img src="images/logo.png" width="207" height="162" border="0" usemap="#Map" />
				<map name="Map" id="Map">
						<area shape="circle" coords="104,80,80" href="index.php" />
				</map>	
		</div>-->
		<div id="college" style="width:100%;margin-left:-20px;">
				<a href="index.php"><img src="images/gne.jpg" width="100%" height="170" /></a>
		</div>
	</div>
		
		<div class="style1" id="info">
					<br/>
							<center><h2>STAFF PROFILE MANAGEMENT SYSTEM</h2></center>
					<br/>';
				
   echo $_SESSION['content']='
<table id="tab">
     <tbody>
			<tr>
					<td colspan="2"><h3>Personal Information</h3></td>
			</tr>
			<tr>
					<td>
							<span class="style5"><strong>Name:</strong></span>
					</td>
					<td>
							<span class="style5">'.$row[3].'</span>
					</td>
			</tr>
			<tr>
					<td>
						<span class="style5"><strong>Date of Birth:</strong></span>
					</td>
					<td>
						<span class="style5">'.$row[4].'(yyyy/mm/dd) </span>
					</td>
			</tr>
			<tr>
					<td>
						<span class="style5"><strong>Designation:</strong></span>
					</td>
					<td>
						<span class="style5">'.$row[5].'</span>
					</td>
			</tr>
			<tr>
						<td><span class="style5"><strong>Experience:</strong></span></td>
						<td>
							<span class="style5">'.$row[6].'</span>
						</td>
			</tr>
			<tr>
						<td><span class="style5"><strong>Qualifications:</strong></span></td>
						<td><span class="style5">'.$row[7].'</span>
						</td>
			</tr>
			<tr>
					  <td><span class="style5"><strong>Research Interest:</strong></span></td>
					  <td><span class="style5">'.$row[8].'</span>
						</td>
			</tr>
		</tbody>
    </table>
	<br />
    <table id="tab1">
      <tbody>
		<tr>
				<td colspan="2"><h3>Contact Information<h3></td>
		</tr>
        <tr>
          <td><span class="style10">Office Address:</span></td>
          <td><span class="style5">'.$row[9].'</span></td>
        </tr>
        <tr>
			<td><span class="style5"><strong>Contact Number:</strong></span></td>
			<td><span class="style5">'.$row[10].'</span>
			</td>
        </tr>
        <tr>
					<td><span class="style5"><strong>Email Id</strong></span></td>
					<td><span class="style5">'.$row[11]. "<br>";
								}
								$result->close();
							}
							else{
									echo"no records matching";
								}
							}
							else
							{
							echo"ERROR:could not execute $sql.".$mysqli->error;
							}
						
			echo $_SESSION['content1']='</span></td>
				</tr>
			</tbody>
    </table>';
	echo $_SESSION['content2']='
	<br />

    
     <table id="tab1">
			<tr>
					<td colspan="5"><h3>Conferences/Seminars/Winter/Summer Schools Attended (Last 3 Years)<br/><h3></td>
			</tr>
			<tr>
				<th align="left">Title</th>
				<th align="left">Nature</th>
				<th align="left">Organized By</th>
				<th align="left">Year</th>
			</tr>';
			
			

			$sql = "SELECT * from conference WHERE username = '$_SESSION[username]' " ;
				$result=$mysqli->query($sql);
				if($result-> num_rows>0)
					{
							while($row=$result->fetch_array())
							{
									echo $_SESSION['content3']= '<tr>
											<td width="170"> '.$row[1].' </td>
											<td width="100"> '.$row[2].'</td>
											<td width="200"> '.$row[3].' </td>
											<td width="73"> '.$row[4].' </td>
										</tr>';
							}
							$result->close();
					}
			
	echo $_SESSION['content4']='</table>

    <table id="tab1">
			<tr>
					<td colspan="5"><h3>Expert Talks Delivered (Last 3 Years)<h3></td>
			</tr>
			<tr>
					<th align="left">Title</th>
					<th align="left">Organization</th>
					<th align="left">Year</th>
			</tr>';
			
			$sql = "SELECT * from expert_talk WHERE username = '$_SESSION[username]' " ;
				$result=$mysqli->query($sql);
				if($result-> num_rows>0)
				{
					while($row=$result->fetch_array())
					{
						echo $_SESSION['content5']='<tr>
									<td width="170"> '.$row[1].' </td>
									<td width="319"> '.$row[2].'</td>
									<td width="73"> '.$row[3].' </td>
							</tr>';
					}
					$result->close();
				}
		echo $_SESSION['content6']='		
		</table>
		<br />
        <table id="tab1">
				<tr>
						<td colspan="5"><h3>Research Publications (Last 3 Years)<h3></td>
				</tr>
			   <tr>
						<th align="left">Nature</th>
						<th align="left">Details</th>
				</tr>';

			$sql = "SELECT * from research WHERE username = '$_SESSION[username]'";
				$result=$mysqli->query($sql);
				if($result-> num_rows>0)
					{
						while($row=$result->fetch_array())
						{
							echo $_SESSION['content7']='<tr>
											<td width="170"> '.$row[1].' </td>
											<td width="319"> '.$row[2].'</td>
								</tr>';
						}
					$result->close();
					}
			echo $_SESSION['content8']='</table>
   <br />
    <br />
       <table id="tab1">
				<tr>
						<td colspan="5"><h3>M.Tech Thesis Guided (Last 3 Years)<h3></td>
				</tr>
				<tr>
						<th align="left">Title</th>
						<th align="left">Name of Student</th>
						<th align="left">Supervisor/Co-Supervisor</th>
						<th align="left">Year</th>
				</tr>';

				
				$sql = "SELECT * from  thesis_guided WHERE username = '$_SESSION[username]'";
				if($result=$mysqli->query($sql))
					{
					if($result-> num_rows>0)
						{
							while($row=$result->fetch_array())
								{
									echo $_SESSION['content9']='<tr>
												<td width="170"> '.$row[1].' </td>
												<td width="150"> '.$row[2].'</td>
												<td width="130"> '.$row[3].'</td>
												<td width="100"> '.$row[4].'</td>
										</tr>';
								}
						$result->close();
						}
					}
			echo $_SESSION['content10']='</table>';
	
	$_SESSION['content']=$_SESSION['content'].$_SESSION['content1'].$_SESSION['content2'].$_SESSION['content3'];
	
	$_SESSION['content1']=$_SESSION['content4'].$_SESSION['content5'].$_SESSION['content6'].$_SESSION['content7'].$_SESSION['content8'].$_SESSION['content9'].$_SESSION['content10'];
			?>

  </div>
   <br/>
  <br/>
  <br/>
</div>
