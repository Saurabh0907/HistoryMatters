<?php
include_once 'Database_Connect.php';
?>

<link rel="stylesheet" href="CSS/main.css">
<script src="JS/jquery.min.js"></script>
<script src="JS/main.js" ></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script language="javascript" src="jquery.timers-1.0.0.js"></script>
<script src="JS/ajax.js" ></script>
<title>History Matters </title>

<div id="topbar" class="refresh" style="position:fixed";>
			<div style="display:inline">
                <a href="main6.php" style="text-decoration:none" ><span id="darken"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=2");$data = mysql_fetch_array($d);echo ($data['name']);?></span><span id="darken1"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=3");$data = mysql_fetch_array($d);echo ($data['name']);?>&nbsp</span></a>
			</div>
			<div class="navigation" style="display:inline">
<!--			<a id="a1" href=""><img src="<?php echo 'get_img_blob.php?id=6'; ?>" title="About" height="20px" width="20px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=7'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=6'; ?>'"></img></a>
				<a id="a2" href=""><img src="<?php echo 'get_img_blob.php?id=4'; ?>" title="Search" height="20px" width="20px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=5'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=4'; ?>'"></img></a>
	-->			<a id="a3" href=""><img src="<?php echo 'get_img_blob.php?id=2'; ?>" title="Scroll to Top" height="20px" width="25px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=3'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=2'; ?>'"></img></a>
				<a id="map_but" href="#"><img src="<?php echo 'get_img_blob.php?id=31'; ?>" title="Map To Destination" height="30px" width="30px"></img></a>
<!--				<a id="news_but" href="#"><img src="<?php echo 'get_img_blob.php?id=32'; ?>" title="History By Year" height="30px" width="30px"></img></a>
	-->		</div>
			
			
			<div id="in-out">
				<a href="#" id="Login-Out" style="text-decoration:none"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=4");$data = mysql_fetch_array($d);echo ($data['name']);?></a>
			</div>
			
			<div id="in_out_menu">
				<ul id="out_out">
					<li><a href="#" id="logggg" class="out_out_href1"> Welcome </a>
						<ul id="out_inside">
							<li><a id="po_but" href="" class="out_out_href2"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=31");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
							<li><a id="edit_but" href="" class="out_out_href2"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=32");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
							<li><a id="lo_but" href="" class="out_out_href2"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=6");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
						</ul>
					</li>
				</ul>
			</div>
</div>

<div id="fade_div"></div>
<div id="map_div"><?php	echo '<img id="x_img3" src="get_img_blob.php?id=9">'; ?><?php include('map3.php'); ?></div>
<div id="login_div"><?php	echo '<img id="x_img" src="get_img_blob.php?id=9">'; ?><?php include_once('Loginform.php'); ?></div>			
<div id="regis_div"><?php	echo '<img id="x_img1" src="get_img_blob.php?id=9">'; ?><?php include_once('Registerform.php'); ?></div>	
<div id="forgot_div"><?php	echo '<img id="x_img2" src="get_img_blob.php?id=9">'; ?><?php include_once('Forgot_form.php'); ?></div>	
