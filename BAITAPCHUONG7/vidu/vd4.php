<?php
// 1. Kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlybanhang";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

// 2. Cập nhật dữ liệu
$sql = "UPDATE khachhang SET tenkh='Nguyen thanh khanh ', namsinh='2006', diachi='Bạc Liêu'WHERE makh='14TH'";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Cập nhật thành công";
} else {
    echo "Cập nhật thất bại";
}

// 3. Đóng kết nối
mysqli_close($conn);
?>