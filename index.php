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
 

// Attempt insert query execution
$sql = "INSERT INTO editcount (username, title, count) VALUES
            ('UserA', 'Apples', 1),
            ('UserA', 'Bananas', 1),
            ('UserA', 'Durian', 1),
            ('UserB', 'Bananas', 1),
            ('UserB', 'Carrots', 1),
            ('UserB', 'Durian', 1),
            ('UserC', 'Apples', 1),
            ('UserC', 'Bananas', 1),
            ('UserC', 'Carrots', 1),
            ('UserC', 'Durian', 1),
            ('UserD', 'Durian', 1),
            ('UserE', 'Apples', 1),
            ('UserE', 'Bananas', 1),
            ('UserE', 'Carrots', 1),
            ('UserE', 'Durian', 1),
            ('UserF', 'Apples', 1),
            ('UserF', 'Bananas', 1),
            ('UserF', 'Carrots', 1),
            ('UserF', 'Durian', 1),
            ('UserG', 'Apples', 1),
            ('UserH', 'Bananas', 1),
            ('UserH', 'Carrots', 1),
            ('UserH', 'Durian', 1)";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// Close connection
mysqli_close($link);
