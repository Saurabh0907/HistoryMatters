<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "new_history";

$connection=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_set_charset('utf8',$connection);
mysql_select_db($dbname);

$sql = "SELECT * FROM his";

$q   = mysql_query($sql) or die(mysql_error());

$xml = "<history>";

while($r = mysql_fetch_array($q)){
   
  $xml .= "<data>";
  $xml .= "<year>".$r['year']."</year>";

  $xml .= "<des>".$r['des']."</des>";  

  $xml .= "<color>".$r['ccode']."</color>";    

  $xml .= "</data>";  

}

$xml .= "</history>";

$sxe = new SimpleXMLElement($xml);

$sxe->asXML("dataPHPtime.xml");

 

?>
