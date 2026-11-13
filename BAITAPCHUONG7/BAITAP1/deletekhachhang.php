<?php
include("Connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $makh = $_POST['MaKH'];

    $sql = "DELETE FROM KHACHHANG WHERE MaKH = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "s", $makh);

    if (mysqli_stmt_execute($stmt)) {

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "Xóa khách hàng thành công!";
        } else {
            echo "Không tìm thấy mã khách hàng!";
        }

    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>

<br>
<a href="DeleteKhachhang.html">Quay lại</a>