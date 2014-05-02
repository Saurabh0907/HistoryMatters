
<?php
include_once 'crawl_get_data.php';
include_once 'Database_Connect.php';
if (isset($_GET["page"])) { 
							$page  = $_GET["page"]; 
						} 
						else { $page=1; }; 
$start_from = ($page-1) * 5; 


		if(isset($_POST['SearchInput']))
		{
		$search = htmlentities($_POST['SearchInput']);
		echo "<script>  
			$(document).ready(function(){
				
			});
					
			</script>";
		$query = "select * from mainlinks where keywords like '%$search%' or link like '%$search%' ORDER BY counter DESC LIMIT $start_from,5";
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
							
							echo "<a id='disp_main_link' href=$x target='_blank'>$x</a>";
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