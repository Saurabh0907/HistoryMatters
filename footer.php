<script>
$(document).ready(function(){
  $("#foot_but").click(function(){
    $("#foot_div").toggle(function(){
	window.scrollTo(500,17000);	
	});
	//$("#foot_but_div").css({"display":"inline"});
  });
});

/*$(document).ready(function(){
	$("#foot_but").click(function(){
		if($("#foot_div").is(":hidden"))
		{
			$("#foot_div").css({"display":"inline"});
			$("#foot_but_div").css({"display":"inline"});
		}
	});
});
*/



$(document).ready( function() {
    $("#x_img3").click(function() {
        $("#foot_but_div").css({"display":"none"});
    });
});



function check123()
{
var w = document.Subscription.emailsubscriber.value;
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if (!(w.match(mailformat)))
					{
						alert("Not a valid e-mail address");
						return false;
					}
					return true;
				
}


$(document).ready( function() {
	$("#Subscription").submit(function(event) {
	event.preventDefault();
	var z = check123();
	
	if(z == true)
	{
	
		
		$.ajax({
			url:"subscribe.php",
			data: $("#Subscription").serialize(),
			type:"POST",
			success: function(txt) {
				if(txt == '1')
				{
				alert("You are Already Subscribed");
				document.getElementById("Subscription").reset();
				}
				else
				{
				$(".thanks-subs").css({"visibility":"visible"});
				}
			},
			error: function(txt) {
				console.log(txt);
			},
			cache:false
		});
	}
	else
	{
	
	}
	
	});
});

</script>

<link rel="stylesheet" href="CSS/footer.css">
<div id="footer_content">
	<footer class="clearfix">
                
					<div class="subs-area">
							<div class="subs-area-left">
									<dfn><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=18");$data = mysql_fetch_array($d);echo ($data['name']);?></dfn>
									<small><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=19");$data = mysql_fetch_array($d);echo ($data['name']);?></small>
							</div>
 
							<div class="subs-newletter">
								<div class="over-flow">
								<form id="Subscription" name="Subscription" autocomplete="off">
									<input type="text" placeholder="your email address" class="inpt-subs" name ="emailsubscriber" id ="emailsubscriber">
									<input type="submit" value="Go" class="sbmt-go" id="subscribeuser">
								</form>
								</div>
									<span class="error-subs" id="msg-subs"></span>
									<div class="thanks-subs"><img src="<?php echo 'get_img_blob.php?id=22'; ?>" width="187" height="33" alt="thanks"></div>
							</div>
					</div>
						
						<br><br>
				
                    <div align="center">
				        <p id="follow" style="display:inline"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=20");$data = mysql_fetch_array($d);echo ($data['name']);?></p>
						<div>
						<a id="sg1" href="http://www.twitter.com/HistoryMatters_"  onclick="window.open(this.href); return false;" rel="icon"><img src="<?php echo 'get_img_blob.php?id=20'; ?>" height="30px" width="30px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=21'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=20'; ?>'"></img></a>
						<a id="sg2" href="https://www.facebook.com/pages/History-Matters/177127085809551" onclick="window.open(this.href); return false;" rel="icon"><img src="<?php echo 'get_img_blob.php?id=14'; ?>" height="30px" width="30px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=15'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=14'; ?>'"></img></a>
                        <a id="sg3" href="http://in.linkedin.com" onclick="window.open(this.href); return false;" rel="icon"><img src="<?php echo 'get_img_blob.php?id=18'; ?>" height="30px" width="30px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=19'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=18'; ?>'"></img></a>
						<a id="sg4" href="https://plus.google.com" onclick="window.open(this.href); return false;" rel="icon"><img src="<?php echo 'get_img_blob.php?id=16'; ?>" height="30px" width="30px" onmouseover="this.src='<?php echo 'get_img_blob.php?id=17'; ?>'" onmouseout="this.src='<?php echo 'get_img_blob.php?id=16'; ?>'"></img></a>
						<br>
						</div>
                    </div>
					
					<div align="center" style="font-family:grigo Regular;">
					<a style="text-decoration:none" id="Ashish" href="https://www.facebook.com/ashishsharma137" onclick="window.open(this.href); return false;">
							<?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=21");$data = mysql_fetch_array($d);echo ($data['name']);?>
					</a>&nbsp;|&nbsp;<a style="text-decoration:none" id="Saurabh" href="https://www.facebook.com/SaurabhGarg09" onclick="window.open(this.href); return false;">
							<?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=22");$data = mysql_fetch_array($d);echo ($data['name']);?>
					</a>&nbsp;|&nbsp;<a style="text-decoration:none" id="Shikher" href="https://www.facebook.com/shikher.mishra.1" onclick="window.open(this.href); return false;">
							<?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=23");$data = mysql_fetch_array($d);echo ($data['name']);?></a>
					</div>
					
	</footer><div align="center" style="margin-left:13%">
	
	<iframe align="center" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FHistory-Matters%2F177127085809551%3Fref%3Dhl&amp;width=292&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;header=true&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>
	</div>
	<div align="center" style="font-family:grigo Regular;font-size:20px"><a href="#" style="text-decoration:none" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'width=626,height=436'); return false;"><?php $d = mysql_query("SELECT * FROM web_data WHERE m_id=24");$data = mysql_fetch_array($d);echo ($data['name']);?></a></div>
	</div>
