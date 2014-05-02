
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
		//$text= $text[0]->innertext;
		
		$text1 = $text[0]->find("h4");
		$text1 = $text1[0]->innertext;
		
		
		//if (strpos($text1,'INDIA') !== false || strpos($text1,'INDIA') !== false)
		
		echo $text1;
		echo "<br>";
		$text2 = $text[0]->find("p");
		$text2 = $text2[0]->innertext;
		echo $text2;
		echo "<br>";
		
		
		$text3 = $text[0]->find("a");
		$text3 = $text3[0]->href;
		echo "<a href=$text3 onclick='window.open(this.href);return false;'>View Details</a>";
		echo "<br>";
		
		echo "</div>";		
		
		 $q1 = "select * from historytv18 where header = '$text1'";
		 $sql1 = mysql_query($q1);
	
		if(mysql_num_rows($sql1) == 1)
		{
		}
		else
		{
		$query = "insert into historytv18(img,header,des,link) values('".$text0."','".$text1."','".$text2."','".$text3."')";
		$sql = mysql_query($query);
		}
		$j = $j + 1;
}
?>
</div>
</body>