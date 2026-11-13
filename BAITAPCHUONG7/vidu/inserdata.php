
<?php
$username = "root";
$password = "";
$server = "localhost";
$dbname = "quanlybanhang";

// Kết nối database
$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Không kết nối: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

// Kiểm tra dữ liệu gửi từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lấy dữ liệu từ form
    $msv = $_POST['txtmsv'];
    $hoten = $_POST['txthoten'];
    $nganhhoc = $_POST['txtnganhhoc'];
    $tongdiem = $_POST['txttongdiem'];

    // Thêm dữ liệu vào bảng sinhvien
    $sql = "INSERT INTO sinhvien
            (msv, hoten, nganhhoc, tongdiem)
            VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {

        mysqli_stmt_bind_param(
            $stmt,
            "sssd",
            $msv,
            $hoten,
            $nganhhoc,
            $tongdiem
        );

        if (mysqli_stmt_execute($stmt)) {
            echo "<h2 style='color:green'>
                  Thêm sinh viên thành công!
                  </h2>";
        } else {
            echo "Lỗi thêm dữ liệu: " .
                 mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);

    } else {
        echo "Lỗi SQL: " . mysqli_error($conn);
    }

} else {
    echo "Vui lòng nhập dữ liệu từ form!";
}

mysqli_close($conn);
?>

<br><br>
<a href="insertdata.html">Quay lại</a>
