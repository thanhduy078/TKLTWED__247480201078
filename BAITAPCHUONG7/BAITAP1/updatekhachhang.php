
<?php
include("Connection.php");

// Kiểm tra dữ liệu gửi từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lấy dữ liệu từ form
    $makh = $_POST['MaKH'];
    $tenkh = $_POST['TenKH'];
    $diachi = $_POST['DiaChi'];
    $dienthoai = $_POST['DienThoai'];
    $namsinh = $_POST['namsinh'];

    // Câu lệnh cập nhật khách hàng
    $sql = "UPDATE KHACHHANG
            SET TenKH='$tenkh',
                DiaChi='$diachi',
                DienThoai='$dienthoai',
                NamSinh='$namsinh'
            WHERE MaKH='$makh'";

    // Thực hiện cập nhật
    if (mysqli_query($conn, $sql)) {
        echo "Cập nhật khách hàng thành công!";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    // Đóng kết nối
    mysqli_close($conn);

} else {
    echo "Vui lòng nhập dữ liệu từ form!";
}
$str = "SELECT * FROM `khachhang`";
$khachhang = mysqli_query($conn, $str);

while ($row = mysqli_fetch_array($khachhang)) 
    echo $row['makh'] . " ";
    echo $row['tenkh'] . " ";
    echo $row['namsinh'] . " ";
    echo $row['dienthoai'] . " ";
    echo $row['diachi'] . "<br>";
?>

<br><br>
<a href="UpdateKhachhang.html">Quay lại</a>
