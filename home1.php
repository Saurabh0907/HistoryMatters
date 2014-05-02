<html>
<script src="JS/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/cssflip.css"></link>
<style>
body
{
margin:0 0 0 0;
}

* {
	margin: 0; 
	padding: 0;
	border:0;
}

#secondpagehome
{
position:relative;
height:100%;
width:100%;
background-color:#ebe9e2;
margin-top:3%;
}
</style>

<script>

$(document).ready(function(){
  $("#div2_2").click(function(){
     		$("#secondpagehome").hide();
			$("#f2").show();
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
                $("#secondpagehome").load('rulers.php'); // www.example.com/file.php
            }
        });
      });
});



</script>
<body>
<div id="secondpagehome">		
 <div class="container1">
       
        <section class="contant">
        <div id="tu-css3flip">	
        <ul>
			<li>
				<div class="tu-item tu-item-1" >				
					<div class="tu-info-wrap">
						<div class="tu-info">
							<div class="tu-info-front tu-item-1">
								<h3>Search Web</h3>
								
							</div>
							<div class="tu-info-back" id="div2_2">
								<img id="div2_2" src="images/search-icon.png"  width="150" height="200"></img>							</div>	
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="tu-item tu-item-2" >
					<div class="tu-info-wrap">
						<div class="tu-info">
							<div class="tu-info-front tu-item-2">
							<h3>Time Line</span> </h3>
							</div>
							<div class="tu-info-back" id="div2_3">
								 <a  href="timeline.php"  target="_blank"><img id="timeline" src="images/hourglass.png" width="200" height="200" /></a>
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
							<h3>Famous Rulers</h3>
							</div>
							<div class="tu-info-back" id="div2_4">
								<img id="timeline" src="images/hourglass.png" width="200" height="200" />
								
							</div>
						</div>
					</div>
				</div>
			</li>
			
			</ul>
		</div>
        </section>
    </div></div>


	<div id="f2" class="fr">
			<iframe src="crawl_get_data.php" class="fr1" seamless scrolling="no" frameborder="0"></iframe>
	</div>
	
</body>
</html>