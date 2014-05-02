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

#main_hist
{
margin-top:2%;
}
</style>
<?php
include_once('Database_Connect.php');
$xml = simplexml_load_file("hist.xml");
echo "<div id='main_hist'>";


        
    foreach($xml->children() as $tv18)
    {
		$a = $tv18->imglink;
		$b = $tv18->header;
		$c = $tv18->des;
		$d = $tv18->link;
				
				
		echo "<div class='item1'>";
		echo "<img src='$a' />";
		echo "<p id='xx'>";echo $b;echo "</p>";
		echo "<p id='xx1'>";echo $c;echo "</p>";
		echo "<a id='xx2' href='".$d."'target='_blank' style='text-decoration:none;'>View Details</a>";
		echo "</div>";
		
    }
	echo "<p style='align:center'><a id='xx2' href='i2.php' target='_blank' style='text-decoration:none'>Click To View All</a></p>";
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