<style>
#xx
{
font-family: Raleway;
font-color:1d1711;
font-weight:bold;
}

#xx1
{
font-family:Din;
font-color:1d1711;
}

#xx2
{
font-family: Raleway;
}
</style>
<?php
include_once('Database_Connect.php');
echo "<div id='main_hist'>";
$q = "select * from historytv18 where header like '%INDIA%' OR header like '%BOMBAY%' OR header like '%MAHAL%'";

	$result = mysql_query($q);
	while ($row = mysql_fetch_assoc($result))
	{
		$a = $row['img'];
		$b = $row['header'];
		$c = $row['des'];
		$d = $row['link'];
				
				
		echo "<div class='item1'>";
		echo "<p>";echo $a;echo "</p>";
		echo "<p id='xx'>";echo $b;echo "</p>";
		echo "<p id='xx1'>";echo $c;echo "</p>";
		echo "<a id='xx2' href='".$d."'target='_blank' style='text-decoration:none;'>View Details</a>";
		echo "</div>";
		
	}
	echo "<a id='xx2' href='i2.php' target='_blank' style='text-decoration:none'>Click To View All</a>";
		echo "</div>";	
?>
<html>
<style>
#main_hist
{
margin-left:4%;
margin-top:4%;
}
.item1
		{
		padding-right:3%;
		width:30%;
		display:inline-block;
		}

</style>
</html>