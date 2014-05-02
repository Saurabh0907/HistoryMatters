<html>

<script>
function changetouppercase()
{
	var element = document.getElementById('crawl_ip');
	element.value = element.value.toUpperCase();
}

</script>

<style>
	
	#main_crawl
	{		
		position:absolute;
		margin-top:2%;
		width:50%;
		margin-left:15%;
	}
	
	#disp_main_link
	{
		text-decoration:none;
		color:green;
	}

	#displink
	{	
		text-decoration:none;
		
		font-size: 40px;
		white-space:nowrap;
		margin-left:90px;
		line-height:180%;
	}
	
	#disp_div
	{
		
	
	}
	
	#crawl_ip
	{
	margin-top:2%;
	width:30%;
	margin-left:15%;
	-webkit-box-shadow: 0px 2px 15px #999;
	autoFocus: true
	}
	
</style>

<body>
<form name="crawling"  action="crawl_get_data.php" method="POST">
<input type="text" name="crawl_ip" id="crawl_ip" placeholder="Search..." onchange='changetouppercase()'>
<button id="crawl_sub" type="submit" name="crawl_sub" value="submit">Search</button>
</form>
<div id="crawl_div"></div>
</body>

</html>
<?php
include 'Database_Connect.php';
if (isset($_GET["page"])) { 
							$page  = $_GET["page"]; 
						} 
						else { $page=1; }; 
$start_from = ($page-1) * 5; 


		if(isset($_POST['crawl_ip']))
		{
		$search = htmlentities($_POST['crawl_ip']);
				
		$query = "select * from mainlinks where keywords like '%$search%' or link like '%$search%' ORDER BY counter LIMIT $start_from,5";
		$result = mysql_query($query);

		if (!$result) {
				$message  = 'Invalid query: ' . mysql_error() . "\n";
				$message .= 'Whole query: ' . $query;
				die($message);
					  }
					  echo "<div id='main_crawl'>";
					 // echo "Search Item :";
					 echo "<a id='displink'>$search</a><br>";
					  
					  while ($row = mysql_fetch_assoc($result)) 
						{
							$x = $row['link'];
							$y = $row['des'];
							
							echo "<a id='disp_main_link' href=$x>$x</a>";
							echo "<div id='disp_div'>$y</div><br><br>";
							
						}
						
						$sql = "SELECT COUNT(*) FROM mainlinks where keywords like '%$search%' or link like '%$search%'"; 
						$rs_result = mysql_query($sql); 
						$row = mysql_fetch_row($rs_result); 
						$total_records = $row[0]; 
						$total_pages = ceil($total_records / 5); 
  
						for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='crawl_get_data.php?page=".$i."'>".$i."</a> "; 
															}; 
						
						
						
					  echo "</div>";
					  
		}			  
?>