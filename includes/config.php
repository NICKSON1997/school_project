
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'zetech_units';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connection failed: %s\n". $conn -> error);
?>
