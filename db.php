<?php
// Ưu tiên lấy từ biến môi trường (trên server), nếu không có thì dùng mặc định (local)
$servername = getenv('DB_SERVER') ?: 'localhost';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASS') ?: ''; // Mật khẩu mặc định XAMPP thường rỗng
$dbname = getenv('DB_NAME') ?: 'cuoikioss';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
