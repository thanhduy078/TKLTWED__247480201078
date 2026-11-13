
<?php
include("connection.php");

// Kiểm tra dữ liệu gửi từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lấy dữ liệu
    $mahang = $_POST["mahang"];
    $tenhang = $_POST["tenhang"];
    $mansx = $_POST["mansx"];
    $namsx = $_POST["namsx"];
    $gia = $_POST["gia"];

    // Thêm dữ liệu vào bảng hanghoa
    $sql = "INSERT INTO hanghoa
            (mahang, tenhang, mansx, namsx, gia)
            VALUES ('$mahang', '$tenhang', '$mansx', '$namsx', '$gia')";

    // Kiểm tra kết quả
    if (mysqli_query($conn, $sql)) {
        echo "Thêm hàng hóa thành công!";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    // Đóng kết nối
    mysqli_close($conn);
}
?>

<br><br>
<a href="inserhanghoa.html">Quay lại</a>
