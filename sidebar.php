<?php
include_once 'Database_Connect.php';
?>

<link rel="stylesheet" href="CSS/main.css">
<script src="JS/jquery.min.js"></script>
<script src="JS/main.js" ></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script language="javascript" src="jquery.timers-1.0.0.js"></script>
<script src="JS/ajax.js" ></script>
<style>
body
{
height:100%;
width:100%;
margin:0 0 0 0;
background-color:#ebe9e2;
}
</style>
<body>

<div id="index-left-side-nav">
			<div id="index-left-side-nav-header">
				<a id="image" href=""><?php	echo '<img src="get_img_blob.php?id=8" width="120px" height="120px"/>';	?></a>
			</div>
			
<div id="navcontainer">
<ul id="navlist">

	<li><a id="home_but" href="#" style="cursor: pointer;"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=7");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
	


	<li id="active"><a href="#" id="gal_but"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=9");$data = mysql_fetch_array($d);echo ($data['name']);?></a> 
	</li>


	<li id="active"><a href="#" id="current"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=12");$data = mysql_fetch_array($d);echo ($data['name']);?></a> 
		<ul id="subnavlist">
			<li><a id="oth_web" href="#"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=14");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li><!--javascript:ajaxpage('other_websites.php','content');-->
			<li><a id="book_crawl" href="#"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=30");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li><!--javascript:ajaxpage('other_websites.php','content');-->
		</ul>
	</li>


	
	<li><a id="login_but" href="#" style="cursor: pointer;"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=15");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li><!--javascript:ajaxpage('Loginform.php','content');loadobjs('JS/Login_formvalidation.js')-->
	<li><a id="regis_but" href="#" style="cursor: pointer;"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=16");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li> <!--javascript:ajaxpage('Registerform.php','content');loadobjs('JS/Reg_formvalidation.js')-->
	<li><a id="discus_but" href="#" style="cursor: pointer;"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=17");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
	<li><a id="histtv_but" href="#" style="cursor: pointer;"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=33");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
	<li><a id="today_but" href="#" style="cursor: pointer;"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=35");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
	<li><a id="foot_but" href="#" style="cursor: pointer;"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=34");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
</ul>

</div>

<div id="index-left-side-nav-hide">
				<a id="nav-but1"><img src="<?php echo 'get_img_blob.php?id=10'; ?>" title="About" height="20px" width="20px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=11'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=10'; ?>'"></img></a>
			</div>


</div>
<div id="index-left-side-nav-show">
	<a id="nav-but2"><img src="<?php echo 'get_img_blob.php?id=12'; ?>" title="About" height="25px" width="25px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=13'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=12'; ?>'"></img></a>
</div>



<div id="content"></div>
</body>