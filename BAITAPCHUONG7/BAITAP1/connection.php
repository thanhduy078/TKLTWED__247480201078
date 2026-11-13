<?php
// Khai báo thông tin kết nối CSDL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlybanhang";

// Tạo kết nối đến MySQL
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Thiết lập bảng mã tiếng Việt
$conn->set_charset("utf8mb4");

echo "Kết nối cơ sở dữ liệu thành công!";
?>