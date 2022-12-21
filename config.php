<?php
// make the variables for the connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";
// make connection object
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "connection created successfully";
}
// check if connection worked 
catch(PDOException $e) {
    echo "connection faild successfully".$e->getMessage();
    }