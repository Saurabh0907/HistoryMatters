
<html>


<style type="text/css">
body
{
margin:0 0 0 0;
}

#secondpagehome
{
height:100%;
}

.divvs
{
-webkit-border-radius:100%;
-moz-border-radius:100%;
-o-border-radius:100%;
border-radius:100%;

position:absolute;
background-color:#1d1711;
height:28%;
width:15%;
}

.divvvs
{
-webkit-border-radius:100%;
-moz-border-radius:100%;
-o-border-radius:100%;
border-radius:100%;
position:absolute;
height:100%;
width:100%;
margin-top:2%;
}


.divvs_dat
{
margin-left:30%;margin-top:20%;
color: #f2f0ea;
font-size:230%;

}


.fr
{
background-color:#ebe9e2;
height:100%;
width:100%;
display:none;
}

.fr1
{
background-color:#ebe9e2;
height:100%;
width:100%;

}

#timeline
{
margin-top:-10px;
}

#textt
{
margin-left:auto;
margin-right:auto;
width:80%;
text-align:center;
font-family: Raleway;
font-color:1d1711;
font-size:40px;
}

#textt1
{
margin-top:-2%;
margin-left:auto;
margin-right:auto;
width:80%;
text-align:right;
font-family:Din;
font-color:1d1711;
font-size:27px;
}

#textt2
{
margin-left:auto;
margin-right:auto;
width:95%;
text-align:center;
font-family: Colonna MT;
font-color:1d1711;
font-size:50px;
}

</style>

<script>

$(document).ready(function(){
  $("#div2_2").click(function(){
     		$("#secondpagehome").hide();
			$("#f2").show();
			$("#foot_div").css({"display":"none"});
  });  
});

$(document).ready(function(){
  $("#div2_4").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
				$("#foot_div").css({"display":"none"});
                $("#secondpagehome").load('rulers.php'); // www.example.com/file.php
            }
        });
      });
});



</script>

<link rel="stylesheet" type="text/css" href="css/cssflip.css"></link>
<body>
<div id="secondpagehome">		
 <div class="container1">       
 <p id="textt2">"Explore.Rediscover.Express your love for Indian History"</p>
        <div id="tu-css3flip">	
        <ul>
			<li>
				<div class="tu-item tu-item-1" >				
					<div class="tu-info-wrap">
						<div class="tu-info">
							<div class="tu-info-front tu-item-1">
								<?php echo '<img src="get_img_blob.php?id=29" width="80" style="margin-top:25%;margin-left:2%;" height="80"></img>'; ?>
								<h3 style="margin-top:-45%">Search Web</h3>
								
							</div>
							<div class="tu-info-back" id="div2_2">
								<?php echo '<img src="get_img_blob.php?id=28" width="200" style="margin-top:10%;margin-left:2%;" height="200" style="margin-top:1%"></img>'; ?>							</div>	
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="tu-item tu-item-2" >
					<div class="tu-info-wrap">
						<div class="tu-info">
							<div class="tu-info-front tu-item-2">
							<?php echo '<img src="images/hourglass1.png" width="100" style="margin-top:24%;margin-left:2%;" height="85"></img>'; ?>
							<h3 style="margin-top:-45%">Time Line</h3>
							</div>
							<div class="tu-info-back" id="div2_3">
								 <a  href="timeline2.php"  target="_blank"><?php echo '<img id="timeline" src="get_img_blob.php?id=26" style="margin-top:1%" width="250" height="250" />'; ?></a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="tu-item tu-item-3" >
					<div class="tu-info-wrap">
						<div class="tu-info">
							<div class="tu-info-front tu-item-3">
							<img src="images/ruler2.png" width="75" style="margin-top:24%;margin-left:2%;" height="85"></img>
							<h3 style="margin-top:-45%">Famous Rulers</h3>
							</div>
							<div class="tu-info-back" id="div2_4">
									<img id="timeline" src="images/ruler1.png" style="margin-top:12%;margin-left:-4%" width="200" height="200" />
							</div>
						</div>
					</div>
				</div>
			</li>
			
			</ul>
		</div>
		
		<p id="textt"> "History doesn't repeat itself, but it does rhyme"</p>
		<p id="textt1">  - Mark Twain</p>
 
        
    </div></div>
<!--
<div id="secondpagehome">			
				<div id="div2_2" class="divvs">
						<img class="divvvs" src="images/search1.png" title="Search The Website" />
				</div>
			
				<div id="div2_3" class="divvs" >
				<a  href="timeline.php"  target="_blank"><img class="divvvs" id="timeline" src="images/timeline1.png" title="Search The Website"/></a>
					<!--<p id="div2_3_dat" class="divvs_dat">Search<br>The<br>Website</p>-->
				<!--
				</div>
			
				<div id="div2_4" class="divvs">
					<p id="div2_4_dat" class="divvs_dat">Famous<br>Rulers</p>
				</div>
</div>
-->
	<div id="f2" class="fr">
			<iframe src="crawl_get_data.php" class="fr1" seamless scrolling="no" frameborder="0"></iframe>
	</div>
	
</body>
</html>