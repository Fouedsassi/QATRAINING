<?php 

$db_hostname = 'localhost';
$db_database = 'qatraining';
$db_username = 'fouedsassi';
$db_password = 'ontraport123';

$db_server = mysql_connect($db_hostname, $db_username, $db_password)
    or die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($db_database)
    or die("Unable to select database: " . mysql_error());

?>

