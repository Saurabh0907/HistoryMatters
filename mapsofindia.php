
<style>

#bookss
{
display:block;
margin-left:24%;
width:50%;
height:auto;
overflow:hidden;
}

#read_more2
{
overflow:hidden;
display:none; 
}
</style>

<script>
$(document).ready(function(){
  $("#read_more_but").click(function(e)
  {
				$("#read_more").css({"display":"none"});
				$("#read_more_but").css({"display":"none"});
                $("#read_more2").css({"display":"inline-block"});
  });
});

</script>
<body bgcolor="#f2f0ea">
<div style="margin-top:5%">

<?php 

$con=mysql_connect('localhost' , 'root','') or   die('connection Error');
         if($con)
          {
             mysql_select_db('historymatters') or die('Could not Select Database');

          }
	
	
include_once("simple_html_dom.php");

ini_set('max_execution_time', 3000);

$html = new simple_html_dom();

$query_URL = "http://www.mapsofindia.com/on-this-day/";
$html->load_file($query_URL);
$results = $html->find(".text div");
	
		$text1= $results[0]->find(".postdate");
		$text1= $text1[0]->innertext;
		echo "<div id='bookss'>";
		//echo $text1;
		echo "<br>";
		
		$text2= $results[0]->find("a");
		$text3 = $text2[0]->title;
		//echo "<h1>$text3</h1>";
		$text4= $text2[0]->href;
		//echo "<a href='$text4' onclick='window.open(this.href);return false;' style='text-decoration:none;'>Click to view in browser</a>";
		echo "<br>";
		
		$text6= $results[0]->find(".entry");
		$text5= $text6[0]->find('p',0);
		//echo $text5;
		
		$q = "select * from mapsofindia where title='".$text3."'";
		$sql = mysql_query($q);
		if(mysql_num_rows($sql) !=1)
		{
			$q1 = "insert into mapsofindia(date,title,href,para) values('$text1','$text3','$text4','$text5')";
			$sql1 = mysql_query($q1);
		}
		//echo "<br>";
		//$text5 = $text3[0]->find('p',1);
		//echo $text5;
		//$q3 = "select * from mapsofindia where title='".$text3."'";
		$q3 = "select * from mapsofindia order by id desc";
		$my = mysql_query($q3);
		$row = mysql_fetch_assoc($my);
		
		echo $row['date'];
		echo "<br>";
		echo " <h1>";
		echo $row['title'];
		echo" </h1> ";
		echo "<br>";
		echo "<a href='".$row['href']."' onclick='window.open(this.href);return false;' style='text-decoration:none;'>Click to view in browser</a>";
		echo "<br>";
		echo "<div id='read_more'>";
			echo $row['para'];
		echo "</div>";
		echo "<div id='read_more_but'><a href='#' style='text-decoration:none;'>Read More</a></div>";
		echo "<br>";
		

							
							$query_URL = $row['href'];
							$html->load_file($query_URL);
							$results = $html->find(".text-info");
							$t = $results[0]->innertext;
							echo "<div id='read_more2'>$t</div>";
							echo "</div>";
?>
</div>
</body>