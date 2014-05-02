<?php
    echo '<head>';
    echo ' <link rel="stylesheet" href="style.css" type="text/css">';
echo '</head>';



require( "config.php" );

	
	
	
	
	$xml = simplexml_load_file("data.xml");
    echo "<h2 align='center'>".$xml->getName()."</h2><br />";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
    foreach($xml->children() as $data)
    {
        
		echo "YEAR : ".$data->year." <br />";
        echo "<p>DESCRIPTION : ".$data->des."</p>"." <br />";
        
       echo "<hr/>";
	   echo "</p>";
    }
?>