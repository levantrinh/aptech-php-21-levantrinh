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

$sql = "SELECT id, email, passwords FROM lophoc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Email: " . $row["email"]. "- Passwords: " . $row["passwords"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>