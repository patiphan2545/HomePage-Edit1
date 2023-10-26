<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        echo "ลงทะเบียนเสร็จสิ้น. <a href='../Login/index.php'>กลับไปหน้า Login</a>";
    } else {
        echo "เกิดข้อผิดพลาดในการลงทะเบียน: " . mysqli_error($conn);
    }
}
?>
