<?php

$link = mysql_connect('localhost','root','');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('dynasties', $link);
if (!$db_selected) {
    die ('Can\'t use HistoryMatters : ' . mysql_error());
}
			$query = "SELECT * FROM  maurya";
			$result1 = mysql_query($query);
		
				if (!$result1) {
				$message  = 'Invalid query: ' . mysql_error();
				$message .= 'Whole query: ' . $query;
				die($message);
				}
				
				$query = "SELECT * FROM  ghazni";
			$result2 = mysql_query($query);
		
				if (!$result2) {
				$message  = 'Invalid query: ' . mysql_error();
				$message .= 'Whole query: ' . $query;
				die($message);
				}
				
				$query = "SELECT * FROM  ghori";
			$result3 = mysql_query($query);
		
				if (!$result3) {
				$message  = 'Invalid query: ' . mysql_error();
				$message .= 'Whole query: ' . $query;
				die($message);
				}
				
				$query = "SELECT * FROM  gupta";
			$result4 = mysql_query($query);
		
				if (!$result4) {
				$message  = 'Invalid query: ' . mysql_error();
				$message .= 'Whole query: ' . $query;
				die($message);
				}
				
				$query = "SELECT * FROM  khilji";
			$result5 = mysql_query($query);
		
				if (!$result5) {
				$message  = 'Invalid query: ' . mysql_error();
				$message .= 'Whole query: ' . $query;
				die($message);
				}
				
				$query = "SELECT * FROM  lodi";
			$result6 = mysql_query($query);
		
				if (!$result6) {
				$message  = 'Invalid query: ' . mysql_error();
				$message .= 'Whole query: ' . $query;
				die($message);
				}
				
				$query = "SELECT * FROM  marathas";
			$result7 = mysql_query($query);
		
				if (!$result7) {
				$message  = 'Invalid query: ' . mysql_error();
				$message .= 'Whole query: ' . $query;
				die($message);
				}
				
				$query = "SELECT * FROM  mughal";
			$result8 = mysql_query($query);
		
				if (!$result8) {
				$message  = 'Invalid query: ' . mysql_error();
				$message .= 'Whole query: ' . $query;
				die($message);
				}
				
					$query = "SELECT * FROM  slave";
			$result9 = mysql_query($query);
		
				if (!$result9) {
				$message  = 'Invalid query: ' . mysql_error();
				$message .= 'Whole query: ' . $query;
				die($message);
				}
				
					$query = "SELECT * FROM  sur";
			$result10 = mysql_query($query);
		
				if (!$result10) {
				$message  = 'Invalid query: ' . mysql_error();
				$message .= 'Whole query: ' . $query;
				die($message);
				}
				
?>

<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<head>
<meta charset="UTF-8">
<script>
$(document).ready(function()
{

$("#gu1").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/gupta.php?id=1',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#gu2").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/gupta.php?id=2',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#gu3").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/gupta.php?id=3',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#gu4").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/gupta.php?id=4',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#gha1").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/ghazni.php?id=1',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#gho1").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/ghori.php?id=1',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mau1").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/maurya.php?id=1',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mau2").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/maurya.php?id=2',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mau3").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/maurya.php?id=3',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mau4").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/maurya.php?id=4',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#khi1").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/khilji.php?id=1',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#khi2").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/khilji.php?id=2',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#khi3").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/khilji.php?id=3',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#lod1").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/lodi.php?id=1',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#lod2").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/lodi.php?id=2',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});
$("#lod3").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/lodi.php?id=3',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mara1").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/marathas.php?id=1',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mara2").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/marathas.php?id=2',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mara3").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/marathas.php?id=3',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mara4").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/marathas.php?id=4',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mara5").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/marathas.php?id=5',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mug1").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/mughal.php?id=1',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mug2").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/mughal.php?id=2',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mug3").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/mughal.php?id=3',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mug4").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/mughal.php?id=4',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mug5").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/mughal.php?id=5',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#mug6").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/mughal.php?id=6',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#sla1").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/slave.php?id=1',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#sla2").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/slave.php?id=2',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#sla3").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/slave.php?id=3',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#sla4").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/slave.php?id=4',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#sla5").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/slave.php?id=5',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#sur1").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/sur.php?id=1',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#sur2").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/sur.php?id=2',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#sur3").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/sur.php?id=3',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#sur4").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/sur.php?id=4',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});

$("#sur5").click(function(e)
  {
  
  e.preventDefault();
		$.ajax({
			type:"GET",
			url:'rulers/sur.php?id=5',
			cache:false,
			success:function(txt)
			{
				$("#dynas").html(txt);
			}
});	});



 });

</script>
<style>
#dynasty {
padding: 0;
margin: 0;
border: 0;
margin-top:60px;
}
#dynasty ul,li {
list-style: none;
margin: 0;
padding: 0;
}
#dynasty ul {
position: relative;

float: left;
}
#dynasty ul li {
float: left;
min-height: 1px;
line-height: 1em;
vertical-align: middle;
}
#dynasty ul li.hover,
#dynasty ul li:hover {
position: relative;
z-index: 599;
cursor: default;
}

#dynasty ul ul {
visibility: hidden;
position: absolute;
top: 100%;
left: 0;
z-index: 598;
width: 100%;
}
#dynasty ul ul li {
float: none;
}
#dynasty ul li:hover > ul {
visibility: visible;
}
#dynasty ul ul {
top: 0;
left: 100%;
}
#dynasty ul li {
float: none;
}

/* Custom Stuff */
#dynasty span,
#dynasty a 
{
display: inline-block;
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
text-decoration: none;
}
#dynasty 
{
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
-moz-background-clip: padding;
-webkit-background-clip: padding-box;
background-clip: padding-box;
-moz-box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.15);
-webkit-box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.15);
box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.15);
font-weight: 600;
width: 200px;
}
#dynasty:after,
#dynasty ul:after 
{
content: '';
display: block;
clear: both;
}
#dynasty ul,
#dynasty li
 {
width: 100%;
}

#dynasty li
 {
background: #c0bebf url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA0CAMAAAB8fKKlAAAAmVBMVEXy7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7erx7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7ery7eoO3g4TAAAAMnRSTlP8+fbz7+vn497Z1M/KxL+5s66oopuVj4mDfHZwamRdV1FMRkA7NTArJiEcGBQQDAkGA02z+X0AAABLSURBVHheDcGDEQMBAACwvFnbtrv/cO3F949AKBJLpDK5QqlSa2hqaevo6ukbGBoZm5iamVtYWlnb2NrZOzg6Obu4url7eHp5+/wAxikFLnlTZcYAAAAASUVORK5CYII=) repeat-x;
}

#dynasty li:hover > a,
#dynasty li.active > a
 {

}
#dynasty a 
{
color: #666666;
line-height: 100%;
padding: 16px 8px 16px 28px;
width: 164px;
}

#dynasty ul ul li 
{
background: #1d1711;
-webkit-border-radius:4px;
border-bottom: 1px solid #59636F;
-moz-box-shadow: inset 0 1px 0 #66707c;
-webkit-box-shadow: inset 0 1px 0 #66707c;
box-shadow: inset 0 1px 0 #66707c;
}

#dynasty ul ul li:hover {
 background: #4a5662;
}

#dynasty ul ul li a {
  color: #FFF;
}

</style>
</head>
<body bgcolor='#ebe9eb'>
<div id='dynasty'>
<ul>
<li><a href='#'><span>DYNASTIES</span></a>
<ul>
	<li>
<a href='#'><span>Maurya Dynasty</span></a>
<ul>
<?php while($result11 = mysql_fetch_assoc($result1)) {
$x1 = $result11['ruler'];
$i = $result11['id'];
echo "<li><a id='mau$i' href='#'>";
echo $x1;
echo "</a></li>";
}
?>
</ul>
		</li>
		
		<li>
<a href='#'><span>Ghazni Dynasty</span></a>
<ul>
<?php while($result12 = mysql_fetch_assoc($result2)) {
$x2 = $result12['ruler'];
$i = $result12['id'];
echo "<li><a id='gha$i' href='#'>";
echo $x2;
echo "</a></li>";
}
?>
</ul>
		</li>
			<li>
<a href='#'><span>Ghori</span></a>
<ul>
<?php while($result13 = mysql_fetch_assoc($result3)) {
$x3 = $result13['ruler'];
$i = $result13['id'];
echo "<li><a id='gho$i' href='#'>";
echo $x3;
echo "</a></li>";
}
?>
</ul>
		</li>
		
			<li>
<a href='#'><span>Gupta Dynasty</span></a>
<ul>
<?php while($result14 = mysql_fetch_assoc($result4)) {
$x4 = $result14['ruler'];
$i = $result14['id'];
echo "<li><a id='gu$i' href='#'>";
echo $x4;
echo "</a></li>";

}
?>
</ul>
		</li>


			<li>
<a href='#'><span>Khilji Dynasty</span></a>
<ul>
<?php while($result15 = mysql_fetch_assoc($result5)) {
$x5 = $result15['ruler'];
$i = $result15['id'];
echo "<li><a id='khi$i' href='#'>";
echo $x5;
echo "</a></li>";
}
?>
</ul>
		</li>
		
					<li>
<a href='#'><span>Lodi Dynasty</span></a>
<ul>
<?php while($result16 = mysql_fetch_assoc($result6)) {
$x6 = $result16['ruler'];
$i = $result16['id'];
echo "<li><a id='lod$i' href='#'>";
echo $x6;
echo "</a></li>";

}
?>
</ul>
		</li>
		
					<li>
<a href='#'><span>The Marathas</span></a>
<ul>
<?php while($result17 = mysql_fetch_assoc($result7)) {
$x7 = $result17['ruler'];
$i = $result17['id'];
echo "<li><a id='mara$i' href='#'>";
echo $x7;
echo "</a></li>";

}
?>
</ul>
		</li>

		<li>
<a href='#'><span>Mughal Dynasty</span></a>
<ul>
<?php while($result18 = mysql_fetch_assoc($result8)) {
$x8 = $result18['ruler'];
$i = $result18['id'];
echo "<li><a id='mug$i' href='#'>";
echo $x8;
echo "</a></li>";

}
?>
</ul>
		</li>
		
		
		<li>
<a href='#'><span>Slave Dynasty</span></a>
<ul>
<?php while($result19 = mysql_fetch_assoc($result9)) {
$x9 = $result19['ruler'];
$i = $result19['id'];
echo "<li><a id='sla$i' href='#'>";
echo $x9;
echo "</a></li>";
}
?>
</ul>
		</li>
		<li>
<a href='#'><span>Sur Dynasty</span></a>
<ul>
<?php while($result110 = mysql_fetch_assoc($result10)) {
$x10 = $result110['ruler'];
$i = $result110['id'];
echo "<li><a id='sur$i' href='#'>";
echo $x10;
echo "</a></li>";

}
?>
</ul>
		</li>
		
</ul>
</li>
</ul>
</div>
<div id="dynas" style="margin-top:80px;margin-left:auto;margin-right:auto;width:800px;font-size:20px;font-family:raleway">

</div>
</body>
</html>