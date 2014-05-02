
<html>
<head>
<?php include 'Database_Connect.php';?>
<link rel="stylesheet" href="CSS/main.css">
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<script src="JS/jquery.min.js"></script>
<script src="JS/main.js" ></script>
<script src="ajaxconcept_tb.js"></script>
<script src="JS/Login_formvalidation.js"></script>
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
<script>
$(document).ready(function(){
  $("#oth_web").click(function(){
     		$("#SG1").show();
			$("#secondpagehome").hide();
			$("#login_page_form").hide();
			$("#register_page_form").hide();
			$("#discussion_form").hide();
  });  
});

$(document).ready(function(){
  $("#home_but").click(function(){
     		$("#SG1").hide();
			$("#secondpagehome").show();
			$("#login_page_form").hide();
			$("#register_page_form").hide();
			$("#discussion_form").hide();
  });  
});

$(document).ready(function(){
  $("#login_but").click(function(){
     		$("#SG1").hide();
			$("#secondpagehome").hide();
			$("#login_page_form").show();
			$("#register_page_form").hide();
			$("#discussion_form").hide();
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


</script>


</head>


<body>
<div id="div1">

<div id="divv">
<div id="part1">
<h1 id="indian_history">ANCIENT HISTORY INDIAN HISTORY</h1><br>
</div>
<div id="part2">
<input id="but1" type="image" src="images/d1.png" height="35px" width="55px">

</div>
</div>

<div id="topbar" >
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
			<div id="in-out"><span id="Login-Out"> Login</span>
			</div>
			
			</div>


<!-- Side Bar -->

<div id="index-left-side-nav">
			<div id="index-left-side-nav-header">
				<a id="image" href=""><img src="images/hist.png" width="120px" height="120px"/></a>
			</div>
			
<div id="navcontainer">
<ul id="navlist">

	<li><a id="home_but" href="#" style="cursor: pointer;" >HOME</a></li><!--javascript:ajaxpage('home.php','content');-->
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



<div id="content">
	<iframe id="SG1" src="other_websites.php" height="100%" width="100%" scrolling="no" frameborder="0" seamless></iframe>
		
		<div id="secondpagehome">			
				<div id="div2_2" class="divvs">
					<p id="div2_2_dat" class="divvs_dat">Timeline</p>
				</div>
			
				<div id="div2_3" class="divvs">
					<p id="div2_3_dat" class="divvs_dat">Search<br>The<br>Website</p>
				</div>
			
				<div id="div2_4" class="divvs">
					<p id="div2_4_dat" class="divvs_dat">Famous<br>Rulers</p>
				</div>
		</div>
	
	<iframe id="login_page_form" src="Loginform1.php" height="100%" width="100%" scrolling="no" frameborder="0" seamless></iframe>

	<div id="register_page_form">
		<?php include 'Registerform.php'; ?>
	</div>
	
	<iframe id="discussion_form" src="Discussion_form.php" height="100%" width="100%" scrolling="no" frameborder="0" seamless></iframe>
	
</div>

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
					
	</footer><div align="center" style="margin-left:28%">
	<iframe align="center" src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FHistory-Matters%2F177127085809551&amp;width=450&amp;height=46&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;send=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:46px;" allowTransparency="true"></iframe>
	</div>
	<div align="center" style="font-family:Segoe Print"><a href="#" style="text-decoration:none" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'width=626,height=436'); return false;">Share on Facebook</a></div>
	</div>

</div>
</body>

</html>
