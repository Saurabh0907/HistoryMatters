<html>
<style>
	
	#main_crawl
	{		
			margin-top:100px;
			height:100px;
			width:500px;
	}
	
	#disp_main_link
	{
		white-space:nowrap;
		color:green;
		margin-left:50px;
	}

	#displink
	{	
		text-decoration:none;
		font-size: 40px;
		white-space:nowrap;
		margin-left:50px;
		line-height:0%;
	}
	
	#disp_div
	{
		margin-left:50px;
	
	}
</style>
</html>
<?php
$link = mysql_connect('localhost','root','');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('historymatters', $link);
if (!$db_selected) {
    die ('Can\'t use HistoryMatters : ' . mysql_error());
}
		
		$search = htmlentities($_POST['crawl_ip']);
				
		$query = "select * from mainlinks where keywords like '%$search%' or link like '%$search%'";
		$result = mysql_query($query);

		if (!$result) {
				$message  = 'Invalid query: ' . mysql_error() . "\n";
				$message .= 'Whole query: ' . $query;
				die($message);
					  }
					  echo "<div id='main_crawl'>";
					  while ($row = mysql_fetch_assoc($result)) 
						{
							$x = $row['link'];
							$y = $row['des'];
							
							echo "<a id='displink' href=$x>$search</a><br>";
							echo "<a id='disp_main_link' href=$x>$x</a>";
							echo "<div id='disp_div'>$y</div><br><br>";
							
						}
					  echo "</div>";
					  
					  
?>