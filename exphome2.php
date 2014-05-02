<html>

<style>
body
{
margin:0 0 0 0;
}

#secondpagehome
{
position:relative;
height:100%;
width:100%;
background-color:#ebe9e2;
margin-top:3%;
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

#div2_2
{
margin-top:23%;
margin-left:10%;
}

#div2_3
{
margin-top:20%;
margin-left:40%;
}

#div2_4
{
margin-top:23%;
margin-left:70%;
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
				<div id="div2_2" class="divvs">
						<img class="divvvs" src="images/search1.png" title="Search The Website" />
				</div>
			
				<div id="div2_3" class="divvs" >
				<a  href="timeline.php"  target="_blank"><img class="divvvs" id="timeline" src="images/timeline1.png" title="Search The Website"/></a>
					<!--<p id="div2_3_dat" class="divvs_dat">Search<br>The<br>Website</p>-->
				</div>
			
				<div id="div2_4" class="divvs">
					<p id="div2_4_dat" class="divvs_dat">Famous<br>Rulers</p>
				</div>
</div>

	<div id="f2" class="fr">
			<iframe src="crawl_get_data.php" class="fr1" seamless scrolling="no" frameborder="0"></iframe>
	</div>
	
</body>
</html>