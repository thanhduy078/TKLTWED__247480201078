
<?php
include("connection.php");

// Kiểm tra dữ liệu được gửi từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lấy dữ liệu từ form HTML
    $mahd = $_POST['mahd'];
    $makh = $_POST['makh'];
    $mahang = $_POST['mahang'];
    $soluong = $_POST['soluong'];
    $thanhtien = $_POST['thanhtien'];

    // Câu lệnh thêm hóa đơn
    $sql = "INSERT INTO HOADON
            (mahd, makh, mahang, soluong, thanhtien)
            VALUES ('$mahd', '$makh', '$mahang', '$soluong', '$thanhtien')";

    // Thực hiện thêm dữ liệu
    if (mysqli_query($conn, $sql)) {

        echo "Thêm hóa đơn thành công!";

    } else {

        echo "Lỗi: " . mysqli_error($conn);

    }

    // Đóng kết nối
    mysqli_close($conn);
}
?>

<br><br>
<a href="themhoadon.html">Quay lại</a>
