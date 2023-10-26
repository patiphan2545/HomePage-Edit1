<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // เข้าสู่ระบบสำเร็จ
            session_start();
            $_SESSION['user_id'] = $row['id'];
            header('Location: ../Dashboard/dashboard.html');
        } else {
            echo "รหัสผ่านไม่ถูกต้อง";
        }
    } else {
        echo "ไม่พบบัญชีผู้ใช้นี้";
    }
}

mysqli_close($conn);
?>
