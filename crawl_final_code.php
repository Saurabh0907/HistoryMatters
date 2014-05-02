
<?php
$link = mysql_connect('localhost','root','');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

$db_selected = mysql_select_db('historymatters', $link);
if (!$db_selected) {
    die ('Can\'t use crawl : ' . mysql_error());
}


ini_set('max_execution_time', 20000);
include("PHPCrawl_081/libs/PHPCrawler.class.php"); 


class MyCrawler extends PHPCrawler 
{ 
  function handleDocumentInfo(PHPCrawlerDocumentInfo $PageInfo) 
  { 

	$x = $PageInfo->url;
	$y = $PageInfo->meta_attributes["description"];
	$z = $PageInfo->meta_attributes["keywords"];
	echo $x."<br>"; 
	echo $y."<br>";
	echo $z."<br><br>";
	
	/*$query = "select * from links where link='$x'";
	$result = mysql_query($query);
	if($result == NULL)
	{
	
	}
	else
*/
	$query = "insert into links values('$x','$z','$y',0)";
	$result = mysql_query($query);

	} 
} 

$crawler = new MyCrawler(); 

// URL to crawl 
$crawler->setURL("http://www.bbc.co.uk/history/ancient/india/"); 

// Only receive content of files with content-type "text/html" 
$crawler->addContentTypeReceiveRule("#text/html#"); 
$crawler->addContentTypeReceiveRule("#text/php#");
$crawler->addContentTypeReceiveRule("#text/htm#");
$crawler->addContentTypeReceiveRule("#text/pdf#");
$crawler->addContentTypeReceiveRule("#text/jsp#");

$crawler->addURLFilterRule("#\.(jpg|jpeg|gif|png|js|css|ico)$# i"); 

$crawler->enableCookieHandling(true); 

$crawler->setTrafficLimit(1000 * 1024); 

$crawler->go(); 


$report = $crawler->getProcessReport(); 

if (PHP_SAPI == "cli") $lb = "\n"; 
else $lb = "<br />"; 
     
echo "Summary:".$lb; 
echo "Links followed: ".$report->links_followed.$lb; 
echo "Documents received: ".$report->files_received.$lb; 
echo "Bytes received: ".$report->bytes_received." bytes".$lb; 
echo "Process runtime: ".$report->process_runtime." sec".$lb;  


?>