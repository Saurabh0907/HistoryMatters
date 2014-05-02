<?php
ini_set('max_execution_time', 3000);

include('simple_html_dom.php');

$articles = array();

function getArticles($page) 
{
    global $articles;
    $html = new simple_html_dom();
    $html->load_file($page);

    $items = $html->find('div[class=editior_white_inner]');  

	//$articles[] = array($items->innertext);
	
	foreach($items as $post)
	{
		$x = $post->find('p',6);
		echo $x;	
	}
	
	//}
}

	getArticles('http://www.delhicapital.com/monuments-in-delhi');
	

?>