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
$place = "Patia Sector 1";
$flag = $_GET['Food'];
$point = $_GET['Point'];

//include 'update.php';
if($flag == 1)
{
$sql2 = "INSERT INTO sub (place, point, flag)
VALUES ('$place', '$point', '$flag')";

if ($conn->query($sql2) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
}


$conn->close();

//include 'update.php';
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE data SET flag='$flag' WHERE point='$point'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
