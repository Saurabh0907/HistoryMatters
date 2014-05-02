
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
	echo "<form action='Login_parse.php' method='post'>
		Username: <input type='text' name='username'/>&nbsp;
		Password: <input type='password' name='password'/>&nbsp;
		<input type='submit' name='submit' value='Log In'/>";
}
else
echo "<p> You are logged in as ".$_SESSION['username']."&bull;<a href='logout.php'>Logout</a>";

?>
<hr />
<div id="content">
<?php
include_once("Database_Connect.php");
$sql = "select * from forum_categories ORDER BY category_title ASC";
$res = mysql_query($sql) or die(mysql_error());
$categories = "";
if(mysql_num_rows($res) > 0)
{
	while($rows = mysql_fetch_assoc($res))
	{
		$id = $rows['id'];
		$title = $rows['category_title'];
		$des = $rows['category_description'];
		$categories .= "<a href='view_category.php?cid=".$id."' class='cat_links'>".$title." - <font size='-1'>".$des."</font></a>";
	}
	echo $categories;
}
else
echo "<p>There are no categories available yet</p>";
?>
</div>
</div>
</body>
</html>