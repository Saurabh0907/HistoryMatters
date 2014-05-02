<head>
<link rel="stylesheet" href="CSS/menu.css">
<script src="JS/main.js" ></script>
<script type="text/javascript">
/*$(document).ready(function(){
  $("#oth_web").click(function(){
     		$("#SG1").show();
			$("#secondpagehome").hide();
			$("#login_page_form").hide();
			//$("#register_page_form").hide();
			//$("#discussion_form").hide();
  });  
});

$(document).ready(function(){
  $("#home_but").click(function(){
     		$("#SG1").hide();
			$("#secondpagehome").show();
			$("#login_page_form").hide();
			//$("#register_page_form").hide();
			//$("#discussion_form").hide();
  });  
});

$(document).ready(function(){
  $("#login_but").click(function(){
     		$("#SG1").hide();
			$("#secondpagehome").hide();
			$("#login_page_form").show();
			//$("#register_page_form").hide();
			//$("#discussion_form").hide();
  });  
});

$(document).ready(function(){
  $("#regis_but").click(function(){
     		$("#SG1").hide();
			$("#secondpagehome").hide();
			$("#login_page_form").hide();
			$("#register_page_form").show();
			$("#discussion_form").hide();
  });  
});

$(document).ready(function(){
  $("#discus_but").click(function(){
     		$("#SG1").hide();
			$("#secondpagehome").hide();
			$("#login_page_form").hide();
			$("#register_page_form").hide();
			$("#discussion_form").show();
			
  });  
});
*/

$(document).ready(function(){
    $("#content").load("home.php");
});

$(document).ready(function(){
   var j = jQuery.noConflict();
	j(document).ready(function()
	{
		j(".refresh").everyTime(1000,function(i){
			j.ajax({
			  url: "refresh.php",
			  cache: false,
			  success: function(html){
				if(html == "not")
					{
						j("#in-out").css({"display":"inline"});
						j("#in_out_menu").css({"display":"none"});
					}
				else
					{
						j("#in-out").css({"display":"none"});
						j("#in_out_menu").css({"display":"inline"});
					}
			  }
			})
		})
	});
});


$(document).ready(function(){
  $("#home_but").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
                //$("#data_goes_here").text(data);
                $("#content").load('home.php'); // www.example.com/file.php
            }
        });
      });
});

$(document).ready(function(){
  $("#oth_web").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
                //$("#data_goes_here").text(data);
                $("#content").load('other_websites.php'); // www.example.com/file.php
            }
        });
     });
});



</script>




</head>
<?php include 'Database_Connect.php';?>
<div id="topbar" class="refresh">
			<div style="display:inline">
                <a href="" style="text-decoration:none" ><span id="darken"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=2");$data = mysql_fetch_array($d);echo ($data['name']);?></span><span id="darken1"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=3");$data = mysql_fetch_array($d);echo ($data['name']);?>&nbsp</span></a>
			</div>
			<div class="navigation" style="display:inline">
				<a id="a1" href=""><img src="<?php echo 'get_img_blob.php?id=6'; ?>" title="About" height="20px" width="20px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=7'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=6'; ?>'"></img></a>
				<a id="a2" href=""><img src="<?php echo 'get_img_blob.php?id=4'; ?>" title="Search" height="20px" width="20px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=5'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=4'; ?>'"></img></a>
				<a id="a3" href=""><img src="<?php echo 'get_img_blob.php?id=2'; ?>" title="Scroll to Top" height="20px" width="25px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=3'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=2'; ?>'"></img></a>
            </div>
			
			<div id="in-out">
				<a href="#" id="Login-Out" style="text-decoration:none"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=4");$data = mysql_fetch_array($d);echo ($data['name']);?></a>
			</div>
			
			<div id="in_out_menu">
				<ul id="out_out">
					<li><a href="#" id="logggg" class="out_out_href1">Logout</a>
						<ul id="out_inside">
							<li><a href="#" class="out_out_href2">Photoshop</a></li>
							<li><a href="#" class="out_out_href2"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=5");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
							<li><a href="main3.php" class="out_out_href2"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=6");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
						</ul>
					</li>
				</ul>
			</div>
</div>
			
<div id="fade_div"></div>
<div id="login_div"><?php	echo '<img id="x_img" src="get_img_blob.php?id=9">'; ?><?php include 'Loginform.php'; ?></div>			

<!-- Side Bar -->

<div id="index-left-side-nav">
			<div id="index-left-side-nav-header">
				<a id="image" href=""><?php	echo '<img src="get_img_blob.php?id=8" width="120px" height="120px"/>';	?></a>
			</div>
			
<div id="navcontainer">
<ul id="navlist">

	<li><a id="home_but" href="#" style="cursor: pointer;"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=7");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
	<li style="display:none"><a href="#"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=8");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>


	<li id="active"><a href="#" id="current"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=9");$data = mysql_fetch_array($d);echo ($data['name']);?></a> 
		<ul id="subnavlist">
			<li id="subactive"><a href="javascript:ajaxpage('ImageSlider.php','content');" id="subcurrent"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=10");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
			<li><a href="#"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=11");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
		</ul>
	</li>


	<li id="active"><a href="#" id="current"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=12");$data = mysql_fetch_array($d);echo ($data['name']);?></a> 
		<ul id="subnavlist">
			<li id="subactive" style="display:none"><a href="#" id="subcurrent"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=13");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
			<li><a id="oth_web" href="#"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=14");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li><!--javascript:ajaxpage('other_websites.php','content');-->
		</ul>
	</li>


	
	<li><a id="login_but" href="#" style="cursor: pointer;"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=15");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li><!--javascript:ajaxpage('Loginform.php','content');loadobjs('JS/Login_formvalidation.js')-->
	<li><a id="regis_but" href="#" style="cursor: pointer;"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=16");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li> <!--javascript:ajaxpage('Registerform.php','content');loadobjs('JS/Reg_formvalidation.js')-->
	<li><a id="discus_but" href="#" style="cursor: pointer;"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=17");$data = mysql_fetch_array($d);echo ($data['name']);?></a></li>
	
	

</ul>
</div>
<div id="index-left-side-nav-hide">
				<a id="nav-but1"><img src="<?php echo 'get_img_blob.php?id=10'; ?>" title="About" height="20px" width="20px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=11'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=10'; ?>'"></img></a>
			</div>


</div>
<div id="index-left-side-nav-show">
	<a id="nav-but2"><img src="<?php echo 'get_img_blob.php?id=12'; ?>" title="About" height="25px" width="25px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=13'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=12'; ?>'"></img></a>
</div>
