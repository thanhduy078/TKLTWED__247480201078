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

// 2. Thêm dữ liệu
$sql = "INSERT INTO khachhang VALUES
('K011', 'Nguyễn Thanh Duy', '2000-08-12', '0886229495', BacLieu)";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Mẫu tin đã được thêm.";
} else {
    echo "Không thêm được: " . mysqli_error($conn);
}

// 3. Đóng kết nối
mysqli_close($conn);
?>