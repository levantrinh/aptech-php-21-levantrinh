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
VALUES ('1', 'trinh@gmail.com', 'trinh')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>