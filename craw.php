<?php
include('simple_html_dom.php');
include('Database_Connection.php');
$articles = array();

function getArticles($page) 
{
    global $articles;
    $html = new simple_html_dom();
    $html->load_file($page);

    $items = $html->find('textarea',0);  
	$articles[] = array($items->innertext);
	
	
	$q = insert into timeline(des) values('$articles');
	
}

	getArticles('http://en.wikipedia.org/w/index.php?title=1901_in_India&action=edit&section=2');
    foreach($articles as $item) {
		
		
		echo $item[0];
		
		
    }
	

?>