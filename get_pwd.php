
<?php
$new = 'shikher1234';
$y = strrev($new);
$password = hash("sha512", $y); 
echo $password;
?>