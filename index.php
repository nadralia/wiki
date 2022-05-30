<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'wikidb';
$port = 8889;

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $port);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Close connection
mysqli_close($link);
