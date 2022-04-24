<?php
echo 'User IP address-'.$_SERVER['REMOTE_ADDR'];
echo "<br>";
echo "<br>";

$current_file_name=basename($_SERVER['PHP_SELF']);
echo "THe file Name is:".$current_file_name."\n";
echo"<br>";
echo "<br>";

$URL='https://www.w3schools.com/php/default.asp.';
$URL=parse_url($URL);
echo'Scheme : '.$URL['scheme']."<br>";
echo'HOST : '.$URL['host']."<br>";
echo'PATH : '.$URL['path']."<br>";

?>