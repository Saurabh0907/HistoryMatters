<html>

<style>
#bg
{
margin:0 0 0 0;
height:100%;
width:100%;
background:#ebe9e2;
}

#divv
{
position:absolute;
font-weight:bold;
background-image:url('images/loading.gif');
background-repeat:no-repeat;
margin-left:46%;
height:50%;
width:50%;
}

#text_div
{
font-family: Helvetica;
font-size:30px;
text-align:center;
margin-bottom:2%;

}

#total_div
{
margin-top:15%;
}

</style>
<body>
<?php	
$link = mysql_connect('localhost','root','');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('historymatters', $link);
if (!$db_selected) {
    die ('Can\'t use HistoryMatters : ' . mysql_error());
}
$x = $_POST['email'];
$y = $_POST['password'];

$login = mysql_query("SELECT * FROM user WHERE email='$x' and password='$y'");

if (mysql_num_rows($login) == 1) 
{
setcookie('username','SG', time()+180);
//$_SESSION['username'] = $_POST['email'];
header('Location:UserSessionLogin.php');
}
else {
echo "<body bgcolor='#ebe9e2'>";
	echo "<div id='total_div'>";
		echo "<div id='text_div'>Invalid Username And Password<br>Redirecting to Login Page</div>";
		echo "<div id='divv'>";
			header( "refresh:3;url=http://localhost/HistoryMatters/Loginform.php" );
		echo "</div>";
	echo "</div>";
echo "</body>";
}


if(isset($_POST))
{
}
?>
</body>
</html>
