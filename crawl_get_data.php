<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style>
		
		body
		{
		margin-top:5%;
		}
	#main_crawl
	{		
		position:absolute;
		
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
	
			
			#SearchBox {
				
				float: left;
				height: 60px;
				width: 370px;
				
				-webkit-box-shadow: 0px 1px 5px #999;
				margin-left:10%;
				
			}
			
			#SearchButton {
				float: left;
				height: 60px;
				width: 70px;
			}
			
			#SearchInput {
				
				border: none;
				color: #999999;
				font-size: 16px;
				outline: none;
				margin: 20px;
				width: 330px;
				
			}
			
			#SearchResults {
				background: #000000;
				display: none;
				overflow: auto;
				position: absolute;
				width: 330px;
				z-index: 99;
				margin-left:10%;
			}
			
			#SearchResults a {
				color: #FFFFFF;
				display: block;
				padding: 5px 5px 5px 15px;
				text-decoration: none;
			}
			
			
			#SearchResults a:hover {
				color: #333333;
				background: #CCCCFF;
			}
	
		</style>
		<script type="text/javascript" src="JS/jquery-1.3.2.min.js"></script>
		<script type="text/javascript">
		
		
			$(document).ready(function() {
			
				$("#SearchInput").focus(function() {
					if($("#SearchInput").val() == "History Search") {
						$("#SearchInput").val("");
					}
					$("#SearchInput").css("color", "#000000");
				});
				
				$("#SearchInput").blur(function() {
					if($("#SearchInput").val() == "") {
						$("#SearchInput").val("History Search");
						$("#SearchInput").css("color", "#999999");
					}
					$("#SearchResults").slideUp();
				});
				
				$("#SearchInput").keydown(function(e) {
					if(e.which == 8) {
						SearchText = $("#SearchInput").val().substring(0, $("#SearchInput").val().length-1);
					}
					else {
						SearchText = $("#SearchInput").val() + String.fromCharCode(e.which);
					}
					$("#SearchResults").load("crawl_ajax.php", { SearchInput: SearchText });
					$("#SearchResults").slideDown();
				});
			
			});
		</script>
	</head>
	
<body>

<form action="" method="post" action="index.php">

<table style="margin: auto; width: 975px;">
	<tr>
		<td width="380">
			<div id="SearchBox">
				<input type="text" id="SearchInput" name="SearchInput" value="History Search" style="background-color:#ebe9e2" autocomplete="off">
			</div>
			<div id="SearchButton">
				<input type="image" src="images/glass.png" height="65px" width="65px"/>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="position: relative; left: 20px; top: -20px;">
				<div id="SearchResults"></div>
			</div>
		</td>
	</tr>
</table>
</form>

</body>
</html>

<?php
include 'Database_Connect.php';
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
