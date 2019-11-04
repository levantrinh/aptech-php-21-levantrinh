<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trinh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE lophoc (
id INT(6),
email VARCHAR(50),
passwords VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table lophoc created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>