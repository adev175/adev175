<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "personal_website";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
