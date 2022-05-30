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

// create table 
$sql = "CREATE TABLE IF NOT EXISTS editcount( ".
            "edit_id INT NOT NULL AUTO_INCREMENT, ".
            "username VARCHAR(100) NOT NULL, ".
            "title VARCHAR(100) NOT NULL, ".
            "count INT NOT NULL, ".
            "PRIMARY KEY ( edit_id )); ";

if($link->query($sql)) {
   printf("Table editcount created successfully.<br />");
}
if ($link->errno) {
   printf("Could not create table: %s<br />", $mysqli->error);
}
 


// Close connection
mysqli_close($link);
