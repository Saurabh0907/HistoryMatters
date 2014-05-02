
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
<div style="margin-top:5%;">

<?php 
$max_results=166;

$con=mysql_connect('localhost' , 'root','') or   die('connection Error');
         if($con)
          {
             mysql_select_db('historymatters') or die('Could not Select Database');
          }
	
	
include_once("simple_html_dom.php");

ini_set('max_execution_time', 3000);

$html = new simple_html_dom();

$query_URL = "http://www.historyindia.com/shows";
$html->load_file($query_URL);
$results = $html->find(".list li");
for($i=0;$i<$max_results;$i++){
	
		$text = $results[$i]->find(".show-block");
		$text= $text[0]->find("a");
		$text0= $text[0]->innertext;
		
		echo "<div id='bookss'>";
		echo $text0;//Image
		echo "<br>";
		
		$text = $results[$i]->find(".show-block");
		$text= $text[0]->find("div");
		$text= $text[0]->innertext;
		
		echo $text;
		echo "</div>";		
		
}
?>
</div>
</body>