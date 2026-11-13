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

// 2. Xóa dữ liệu
$sql = "DELETE FROM khachhang WHERE makh='14TH'";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Xóa thành công";
} else {
    echo "Xóa thất bại";
}

// 3. Đóng kết nối
mysqli_close($conn);
?>