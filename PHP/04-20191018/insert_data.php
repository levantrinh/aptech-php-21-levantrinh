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

$sql = "INSERT INTO lophoc (id, email, passwords)
VALUES ('1', 'trinh@gmail.com', 'trinh'),
('2', 'nam@gmail.com', 'nam'),
('3', 'minh@gmail.com', 'minh'),
('4', 'ngoc@gmail.com', 'ngoc'),
('5', 'nhan@gmail.com', 'nhan'),
('6', 'phu@gmail.com', 'phu')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>