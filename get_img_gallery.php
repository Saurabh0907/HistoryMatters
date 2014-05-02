<?php
mysql_connect("localhost","root","") or die("Error Occurred-".mysql_error());
mysql_select_db("historymatters") or die("Unable to select database");

$id =  mysql_real_escape_string($_REQUEST['id']);

 $image = mysql_query("SELECT * FROM video WHERE id=$id");
 $image = mysql_fetch_assoc($image);
$image = $image['image'];

header("content-type: image/jpeg"); //will change the whole page into in image else next line wud print the array
echo ($image);
?>