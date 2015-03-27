<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Staff Profile</title>
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<link href="css/style2.css" rel="stylesheet" type="text/css" />
			<script type="text/javascript" src="js/jquery.mins.js"></script>
			<script src="js/reelslideshow.js" type="text/javascript"></script>

				<script type="text/javascript">

						var firstreel=new reelslideshow({
							wrapperid: "myreel", //ID of blank DIV on page to house Slideshow
							dimensions: [300, 347], //width/height of gallery in pixels. Should reflect dimensions of largest image
							imagearray: [
								["images/1.jpg", "AkshayGirdhar.php"], //["image_path", "optional_link", "optional_target"]
								["images/2.jpg", "KulwinderSMann.php"],
								["images/3.jpg", "AmitKamra.php"],
								["images/5.jpg", "HarbhagSSohal.php"],
								["images/7.jpg", "KamaljitKDhillon.php"],
								["images/8.jpg", "KiranJyoti.php"],
								["images/9.jpg", "ManjotKGill.php"],
								["images/10.jpg", "ManpreetSingh.php"],
								["images/11.jpg", "PankajBhambri.php"],
								["images/12.jpg", "ParminderKWadwa.php"],
								["images/13.jpg", "PriyankaArora.php"],
								["images/14.jpg", "RaninderKaur.php"],
								["images/15.jpg", "RanjodhKaur.php"]
                                                                //<--no trailing comma after very last image element!
							],
							displaymode: {type:'auto', pause:2000, cycles:10, pauseonmouseover:true},
							orientation: "v", //Valid values: "h" or "v"
							persist: true, //remember last viewed slide and recall within same session?
							slideduration: 300 //transition duration (milliseconds)
						})

				</script>
</head>
<body bgcolor="fff8c6" alink="#333333" vlink="#333333" link="#333333">
<div id="area">
		
  	
		<form action="home.php" method="post">
			<div id="login">
					<input type="text" title="username" name="username" required="required" class="txt" placeholder="User name"/> 
					<br/>
					<input type="password" title="password" name="password" required="required" class="txt" placeholder="Password"/>
					<br />
					
					<input type="submit" title="login" name="login" value="Login"  class="btn"/>
					<input type="reset"value="Reset"  class="btn"/>
					
			</div>
		</form>
		<div id="college" style="width:100%;margin-left:-310px;">
				<a href="index.php"><img src="images/gne.jpg" width="100%" height="170" /></a>
		</div>
		<div id="search">
			<form action="" method="post">
				<input type="text" name="txt" /> 
				<input type="submit" value="Search" name="search" />
				<?php
					if(isset($_POST['search']))
					{
						include("search.php");
					} 
				?>
			</form> 
		</div>
		<div class="style1" id="deptt">
				STAFF PROFILE MANAGEMENT SYSTEM
		</div><br />

		<div id="links">

<br />
				<a href="conf.php">Conferences Attended By Staff </a><br />
				<a href="research.php">Research Publications By Staff</a><br />
				<a href="expert.php">Expert Talks Deliveres By Staff</a> <br />
				<a href="thesis.php">Thesis Guided By Staff</a><br />
				
		</div>
  
		<div id="reel">  
				<div id="myreel"></div>
				<div class="paginate">
								<a href="javascript:firstreel.navigate('back')" style="margin-right:200px;"> << </a>  <a href="javascript:firstreel.navigate('forth')"> >> </a>
				</div>
		</div>
</div>
</body>
</html>
