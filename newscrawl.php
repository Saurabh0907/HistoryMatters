
<style>

#bookss
{
display:inline-block;
margin-left:50px;
margin-right:50px;
width:300px;
}

</style>
<body bgcolor="#f2f0ea">
<div style="margin-top:5%">

<?php 
$max_results=12;

$con=mysql_connect('localhost' , 'root','') or   die('connection Error');
         if($con)
          {
             mysql_select_db('historymatters') or die('Could not Select Database');
          }
	
	
include_once("simple_html_dom.php");

ini_set('max_execution_time', 3000);

$html = new simple_html_dom();

$query_URL = "http://www.leadthecompetition.in/GK/important-years-indian-history.html";
$html->load_file($query_URL);
$results = $html->find(".gkt tr");
for($i=1;$i<47;$i++){
	
		$text = $results[$i]->find("td");
		
		$text1= $text[0]->innertext;
		$text2= $text[1]->innertext;
		echo $text1;
		echo "<br>";
		echo $text2;
		echo "<br>";echo "<br>";
		echo "<div id='bookss'>";
		
		echo "</div>";
		
}
		
?>
</div>
</body>