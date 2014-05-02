<!doctype html>
<?php
include_once('Database_Connect.php');
?>
<html lang="en">
<head>
<meta charset="utf-8">

<title>News</title>

<base target="_blank">

<style type="text/css">
<!--

body	{
	background-color: #FFFFFF;
	margin: 0;
	padding: 0;
	border: 0;
	}




div		{ color: #000000; font: 11px arial, sans-serif; font-weight: normal; }

.title		{ color: #0033FF; font: 30px arial, sans-serif; font-weight: bold; }

#NewsDiv	{ position: absolute; left: 0; top: 0; width: auto; }

-->
</style>


<script type="text/javascript">
<!-- HIDE CODE JAVASCRIPT NEWS SCROLLER ver 2.0 2013


var scrollspeed = 1;		// SET SCROLLER SPEED 1 = SLOWEST
var speedjump   = 30;		// ADJUST SCROLL JUMPING = RANGE 20 TO 40
var startdelay  = 2; 		// START SCROLLING DELAY IN SECONDS
var nextdelay   = 0; 		// SECOND SCROLL DELAY IN SECONDS 0 = QUICKEST
var topspace    = 0;		// TOP SPACING FIRST TIME SCROLLING
var frameheight = 204;		// IF YOU RESIZE THE WINDOW EDIT THIS HEIGHT TO MATCH


current = (scrollspeed);


function HeightData() {
    AreaHeight = dataobj.offsetHeight;
    if (AreaHeight === 0) {
        setTimeout("HeightData()", (startdelay * 1000));
    } else {
        ScrollNewsDiv();
    }
}

function NewsScrollStart() {
    dataobj = document.all ? document.all.NewsDiv : document.getElementById("NewsDiv");
    dataobj.style.top = topspace + 'px';
    setTimeout("HeightData()", (startdelay * 1000));
}

function ScrollNewsDiv() {
    dataobj.style.top = parseInt(dataobj.style.top) - scrollspeed + 'px';
    if (parseInt(dataobj.style.top) < AreaHeight * (-1)) {
        dataobj.style.top = frameheight + 'px';
        setTimeout("ScrollNewsDiv()", (nextdelay * 1000));
    } else {
        setTimeout("ScrollNewsDiv()", speedjump);
    }
}
-->
</script>
</head>
<body onMouseover="scrollspeed=0" onMouseout="scrollspeed=current" OnLoad="NewsScrollStart();">
<div id="NewsDiv" style="text-align: left; padding: 5px;">
<?php
include_once("simple_html_dom.php");
ini_set('max_execution_time', 3000);
$html = new simple_html_dom();
$query_URL = "http://www.leadthecompetition.in/GK/important-years-indian-history.html";
$html->load_file($query_URL);
$results = $html->find(".gkt tr");
for($i=1;$i<48;$i++){
		$text = $results[$i]->find("td");
		$text1= $text[0]->innertext;
		$text2= $text[1]->innertext;
		$q1 = "select * from Historynews where year='".$text1."'";
		$sql = mysql_query($q1);
		if(mysql_num_rows($sql) != 1)
		{
		$q = "insert into Historynews(year,des) values('$text1','$text2')";
		$sql = mysql_query($q);
		}
		echo "<span class='title'>";
		echo $text1;echo "<br>";
		echo $text2;
		echo "</span>";
		echo "<br>";
				
}
		

?>
</div>

</body>
</html>
