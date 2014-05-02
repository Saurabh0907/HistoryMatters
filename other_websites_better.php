<html>
<SCRIPT language="JavaScript" SRC="ajax.js"></SCRIPT>
<style>
#content1
	{	
	position:absolute;
	width:80%;
	margin-left:10%;
	margin-top:2%;
	}
	
	#title
	{
		font-size:23px;
	}
	
	#link
	{
		text-decoration:none;
		color:green;
	}
	
	#des
	{
		
	}
	

	
	
</style>

<?php 
echo "<div id='content1'>";
$link = mysql_connect('localhost','root','');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('historymatters', $link);
if (!$db_selected) {
    die ('Can\'t use HistoryMatters : ' . mysql_error());
}

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 5; 
$query = "select * from other_websites ORDER BY ID LIMIT $start_from,5";
$rs_result = mysql_query ($query); 


while ($row = mysql_fetch_assoc($rs_result)) { 

						$x = $row['ID'];
						$y = $row['title'];
						$z = $row['link'];
						$w = $row['des'];
						
						echo "<div id='title'>$y</div>";
						echo "<a id='link' href=$z onclick='window.open(this.href);return false;'>$z</a><br>";							
						echo "<div id='des'>$w</div><br>";

}; 

$sql = "SELECT COUNT(*) FROM other_websites"; 
$rs_result = mysql_query($sql); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 5); 
  
for ($i=1; $i<=$total_pages; $i++) { 
$x = "callAJAX('other_websites.php?page=".$i."','content')";
			 echo "<a href='#' onclick=$x>".$i."</a>"; 
}; 
echo "</div>"
?>

</html>