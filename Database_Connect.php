<?php
$link = mysql_connect('localhost','root','');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('historymatters', $link);
if (!$db_selected) {
    die ('Can\'t use HistoryMatters : ' . mysql_error());
}
?>