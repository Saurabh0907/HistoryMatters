<?php
$link = mysql_connect('localhost','root','');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('dynasties', $link);
if (!$db_selected) {
    die ('Can\'t use HistoryMatters : ' . mysql_error());
}
$id = $_GET['id'];
$q = "select * from lodi where id=$id LIMIT 1";
$sql = mysql_query($q) or die(mysql_error());

$row = mysql_fetch_assoc($sql);

echo $row['des'];

?>