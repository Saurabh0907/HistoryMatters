
<?php
include 'Database_Connect.php';

$query = "select keywords from mainlinks";
$logged = mysql_query($query);
while ($row = mysql_fetch_assoc($logged))
{
$abc = explode(',',$row['keywords'],-1);
//$abc = explode(',',$row['keywords'],-1);
$i=0;
$x = count($abc);
while($i < $x)
{
$y = $abc[$i];
print_r($y."<br>");
		$q = "insert into search_key values('$y')";
			$res = mysql_query($q);
	
/*$query1 = "select * from search_key where keyword ='$y";
	$result1 = mysql_query($query1);
if($result1 == NULL)
	{
	}*/
$i++;
}
}



//while ($row = mysql_fetch_assoc($result)) 

?>