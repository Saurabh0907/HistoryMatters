<?php
mysql_connect("localhost","root","") or die("Error Occurred-".mysql_error());
mysql_select_db("historymatters") or die("Unable to select database");

$id =  mysql_real_escape_string($_REQUEST['id']);

 $d = mysql_query("SELECT * FROM web_data WHERE m_id=$id");
 $data = mysql_fetch_array($d);
$dat = $data['name'];

echo ($dat);
?>