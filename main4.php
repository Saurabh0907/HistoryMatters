
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include 'Database_Connect.php';?>
<link rel="stylesheet" href="CSS/main.css">
<script src="JS/jquery.min.js"></script>
<script src="JS/main.js" ></script>
<script src="ajaxconcept_tb.js"></script>
<script src="JS/ajaxroutine.js"></script>
<script src="JS/Login_formvalidation.js"></script>
<link rel="stylesheet" href="CSS/Loginform.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script language="javascript" src="jquery.timers-1.0.0.js"></script>
<SCRIPT language="JavaScript" SRC="JS/ajax.js"></SCRIPT>
<head>


<style>
#SG1
{
display:none;
}

#login_page_form
{
display:none;
}

#register_page_form
{
display:none;
}

#discussion_form
{
display:none;
}
</style>
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



</script>
</head>
<body onload="callAJAX('home.php','content')">
<!--<div class="refresh">

<div id="Login" href="">Login</div>
<div id="Logout" href="main3.php" style="display:none">Logout</div>

</div>
-->

<div id="div1">

<div id="divv">
<div id="part1">
<h1 id="indian_history">ANCIENT HISTORY INDIAN HISTORY</h1><br>
</div>
<div id="part2">
<input id="but1" type="image" src="images/d1.png" height="35px" width="55px">

</div>
</div>

<div id="topbar" class="refresh">
			<div style="display:inline">
                <a href="" style="text-decoration:none" ><span id="darken">INDIAN</span><span id="darken1">HISTORY&nbsp</span></a>
			</div>
			<div class="navigation" style="display:inline">
				<!--<input id="nav1" type="image" src="images/q1.png" title="About" height="20px" width="20px" onmouseover="this.src='images/q2.png'" onmouseout="this.src='images/q1.png'">
				<input id="nav1" type="image" src="images/s1.png" title="Search" height="20px" width="20px" onmouseover="this.src='images/s2.png'" onmouseout="this.src='images/s1.png'">
				<input id="nav13" type="image" src="images/a1.png" title="Scroll to Top" height="20px" width="20px" onmouseover="this.src='images/a3.png'" onmouseout="this.src='images/a1.png'">-->
			
				<a id="a1" href=""><img src="images/q1.png" title="About" height="20px" width="20px" onmouseover="this.src='images/q2.png'" onmouseout="this.src='images/q1.png'"></img></a>
				<a id="a2" href=""><img src="images/s1.png" title="Search" height="20px" width="20px" onmouseover="this.src='images/s2.png'" onmouseout="this.src='images/s1.png'"></img></a>
				<a id="a3" ><img src="images/a1.png" title="Scroll to Top" height="20px" width="25px" onmouseover="this.src='images/a3.png'" onmouseout="this.src='images/a1.png'"></img></a>
            </div>
			<div id="in-out">
				<a href="#" id="Login-Out" style="text-decoration:none">Login</a>
			</div>
			
			<div id="in_out_menu">
				<ul id="out_out">
					<li><a href="#" id="logggg" class="out_out_href1">Logout</a>
						<ul id="out_inside">
							<li><a href="#" class="out_out_href2">Photoshop</a></li>
							<li><a href="#" class="out_out_href2">Profile</a></li>
							<li><a href="main3.php" class="out_out_href2">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
</div>
			
<div id="fade_div"></div>
<div id="login_div"><img href="" id="x_img" src="images/cross.png" /> <?php include 'Loginform.php'; ?>
</div>			

<!-- Side Bar -->

<div id="index-left-side-nav">
			<div id="index-left-side-nav-header">
				<a id="image" href=""><img src="images/hist.png" width="120px" height="120px"/></a>
			</div>
			
<div id="navcontainer">
<ul id="navlist">

	<li><a id="home_but" href="#" style="cursor: pointer;">HOME</a></li>
	<li><a href="#">Today in History</a></li>


	<li id="active"><a href="#" id="current">Gallery</a> 
		<ul id="subnavlist">
			<li id="subactive"><a href="javascript:ajaxpage('ImageSlider.php','content');" id="subcurrent">Images</a></li>
			<li><a href="#">Videos</a></li>
		</ul>
	</li>


	<li id="active"><a href="#" id="current">Resources</a> 
		<ul id="subnavlist">
			<li id="subactive"><a href="#" id="subcurrent">Papers</a></li>
			<li><a id="oth_web" href="#">Other Websites</a></li><!--javascript:ajaxpage('other_websites.php','content');-->
		</ul>
	</li>


	
	<li><a id="login_but" href="#" style="cursor: pointer;">Login</a></li><!--javascript:ajaxpage('Loginform.php','content');loadobjs('JS/Login_formvalidation.js')-->
	<li><a id="regis_but" href="#" style="cursor: pointer;">Register</a></li> <!--javascript:ajaxpage('Registerform.php','content');loadobjs('JS/Reg_formvalidation.js')-->
	<li><a id="discus_but" href="#">Discussions</a></li>
	
	

</ul>
</div>
<div id="index-left-side-nav-hide">
				<a id="nav-but1"><img src="images/leftarrow1.png" title="About" height="20px" width="20px" onmouseover="this.src='images/leftarrow2.png'" onmouseout="this.src='images/leftarrow1.png'"></img></a>
			</div>


</div>
<div id="index-left-side-nav-show">
	<a id="nav-but2"><img src="images/rightarrow1.png" title="About" height="25px" width="25px" onmouseover="this.src='images/rightarrow2.png'" onmouseout="this.src='images/rightarrow1.png'"></img></a>
</div>
<br><br>

<br>
<div id="content"></div>




<div id="footer_content">
	<footer class="clearfix">
                
					<div class="subs-area">
							<div class="subs-area-left">
									<dfn>Stay in Touch </dfn>
									<small>To get the information &amp; stuffs going within our website</small>
							</div>
 
							<div class="subs-newletter">
								<div class="over-flow">
									<input type="text" placeholder="your email address" class="inpt-subs" name ="emailsubscriber" id ="emailsubscriber">
									<input type="submit" value="Go" class="sbmt-go" id="subscribeuser">
								</div>
									<span class="error-subs" id="msg-subs"></span>
									<div class="thanks-subs"><img src="images/thanks-smiley.png" width="187" height="33" alt="thanks"></div>
							</div>
					</div>
						
						<br><br>
				
                    <div align="center">
				        <p id="follow" style="display:inline">OR FOLLOW US</p>
						<div>
						<a id="sg1" href="http://www.twitter.com/Saurabhgarg09"  onclick="window.open(this.href); return false;" rel="icon"><img src="images/Twitter.ico" height="30px" width="30px" onmouseover="this.src='images/Twitter1.ico'" onmouseout="this.src='images/Twitter.ico'"></img></a>
						<a id="sg2" href="https://www.facebook.com/pages/History-Matters/177127085809551" onclick="window.open(this.href); return false;" rel="icon"><img src="images/Facebook.png" height="30px" width="30px" onmouseover="this.src='images/Facebook1.png'" onmouseout="this.src='images/Facebook.png'"></img></a>
                        <a id="sg3" href="http://in.linkedin.com/pub/saurabh-garg/40/3a5/930/" onclick="window.open(this.href); return false;" rel="icon"><img src="images/linkedin.png" height="30px" width="30px" onmouseover="this.src='images/linkedin1.png'" onmouseout="this.src='images/linkedin.png'"></img></a>
						<a id="sg4" href="https://plus.google.com/u/0/113603351718417241870/posts" onclick="window.open(this.href); return false;" rel="icon"><img src="images/google.png" height="30px" width="30px" onmouseover="this.src='images/google1.png'" onmouseout="this.src='images/google.png'"></img></a>
						<br>
						</div>
                    </div>
					
					<div align="center" style="font-family:Segoe Print">
					<a style="text-decoration:none" id="Ashish" href="https://www.facebook.com/ashishsharma137" onclick="window.open(this.href); return false;">ASHISH SHARMA</a>&nbsp;|&nbsp;<a style="text-decoration:none" id="Saurabh" href="https://www.facebook.com/SaurabhGarg09" onclick="window.open(this.href); return false;">SAURABH GARG</a>&nbsp;|&nbsp;<a style="text-decoration:none" id="Shikher" href="https://www.facebook.com/shikher.mishra.1" onclick="window.open(this.href); return false;">SHIKHER MISHRA</a>
					
					</div>
					
	</footer><div align="center" style="margin-left:13%">
	<iframe align="center" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FHistory-Matters%2F177127085809551&amp;width=292&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;header=true&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>
	</div>
	<div align="center" style="font-family:Segoe Print"><a href="#" style="text-decoration:none" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'width=626,height=436'); return false;">Share on Facebook</a></div>
	</div>

</div>
</body>

</html>
