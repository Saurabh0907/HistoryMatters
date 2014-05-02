<?php

$link = mysql_connect('localhost','root','');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('historymatters', $link);
if (!$db_selected) {
    die ('Can\'t use HistoryMatters : ' . mysql_error());
}
		
		$name = htmlentities($_POST['name']);
		$tel = htmlentities($_POST['tel']);
		$email = htmlentities($_POST['email']);
		$password = htmlentities($_POST['password']);
		
		$query = "insert into user values('$name','$tel','$email','$password')";
		$result = mysql_query($query);

		if (!$result) {
				$message  = 'Invalid query: ' . mysql_error() . "\n";
				$message .= 'Whole query: ' . $query;
				die($message);
					  }
					  echo "Registeration Successful";
					  include("form.php");
?>