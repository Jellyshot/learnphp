<?php

$host = "localhost";
$user = "webapp";
$pass = "webapp";
$db = "webdb";

// Create a connection 
$dbconn = new mysqli($host, $user, $pass, $db);

// Code written below is a step taken
// to check that our Database is 
// connected properly or not. If our 
// Database is properly connected we
// can remove this part from the code 
// or we can simply make it a comment 
// for future reference.

if ($dbconn) {
    echo "success";
} else {
    die("Error" . mysqli_connect_error());
}
