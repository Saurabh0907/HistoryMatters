
<?php
session_start();?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="wrapper">


<?php
if(!isset($_SESSION['uid']))
{
	echo "Log In To Continue";
}
else
echo "<p> You are logged in as ".$_SESSION['name']."&bull;<a href='logout.php'>Logout</a>";

?>
<hr />
<div id="content">
<?php
include_once("Database_Connect.php");
$cid = $_GET['cid'];
$tid = $_GET['tid'];
$sql = "select * from topics where category_id='".$cid."' AND id='".$tid."' LIMIT 1";
$res = mysql_query($sql) or die(mysql_error());

if(mysql_num_rows($res) == 1)
{
	echo "<table width='100%'>";
	if(isset($_SESSION['uid'])) 
	{
		echo "<tr><td colspan='2'><input type='submit' value='Add Reply' onClick=\"window.location='post_reply.php?cid=".$cid."&tid=".$tid."'\" /><hr />";
	}
	else
	{
		echo "<tr><td colspan='2'>Please Login to Add your reply</td></tr>";
	}
	
	while($row = mysql_fetch_assoc($res))
	{
		$sql2 = "select * from posts where category_id='".$cid."' AND topic_id='".$tid."'";
		$res2 = mysql_query($sql2) or die(mysql_error());
		
		while($rows2 = mysql_fetch_assoc($res2))
		{
			echo "<tr><td valign='top' style='border: 1px solid #000000;'><div style='min-height:125px;'>".$row['topic_title']." by ".$rows2['post_creator']." - ".$rows2['post_date']."<hr />".$rows2['post_content']."</div></td><td width='200' valign='top' align='center' style='border:1px solid #000000;'>User Info Here</td></tr><tr><td colspan='2'><hr /></td></tr>";
			
		}
		$old_views = $row['topic_views'];
		$new_views = $old_views + 1;
		$sql3 = "update topics SET topic_views='".$new_views."' where category_id ='".$cid."' AND id='".$tid."' LIMIT 1";
		$res3 = mysql_query($sql3) or die(mysql_error());
		
	}
	echo "</table>";
}
else
{
	echo "<p> This topic doesnot exist.</p>";
}

?>
</div>
</div>
</body>
</html>