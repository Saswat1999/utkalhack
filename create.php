<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE data (
id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
place VARCHAR(30) NOT NULL,
point DOUBLE(5) NOT NULL,
flag INT(1) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table data created sucessfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

