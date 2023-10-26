<?php
function updatePasswordInDatabase($email, $newPassword) {
    // เชื่อมต่อกับฐานข้อมูล และอัพเดตรหัสผ่านใหม่
    // ในกรณีนี้คุณควรใช้ PDO หรือ MySQLi
    include('config.php');
    
    $newPassword = password_hash($newPassword, PASSWORD_BCRYPT); // นี่เป็นตัวอย่างการใช้ bcrypt เพื่อเก็บรหัสผ่าน

    $sql = "UPDATE users SET password = '$newPassword' WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        return true; // การอัพเดตสำเร็จ
    } else {
        return false; // ไม่สามารถอัพเดตรหัสผ่าน
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="icon-font-awesome"><img class="vector" src="home.png" /></div>
<div class="image"><img class="logo-followup" src="logofollowup.png" /></div>
<div class="container">
    <h1>Reset password</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับรหัสผ่านใหม่จากฟอร์ม
        $newPassword = $_POST['new_password'];

        // ตรวจสอบรหัสผ่านว่ามีความยาวเพียงพอหรือไม่ (คุณสามารถเพิ่มเงื่อนไขเพิ่มเติมตามความต้องการ)
        if (strlen($newPassword) >= 8) {
            // อัพเดตรหัสผ่านใหม่ในฐานข้อมูล (คุณควรใช้ PDO หรือ MySQLi)
            updatePasswordInDatabase($_GET['email'], $newPassword);
            echo "รหัสผ่านถูกอัพเดตเรียบร้อยแล้ว";
            echo '<br><a href="index.php">กลับไปหน้า Login</a>'; // เพิ่มลิงก์กลับไปหน้า login
        } else {
            echo "รหัสผ่านต้องมีความยาวอย่างน้อย 8 ตัวอักษร";
        }
    }
    ?>

    <form method="post">
        <label for="new_password">New password:</label>
        <input type="password" name="new_password" id="new_password" required>
        <br>
        <input type="submit" value="Reset password">
    </form>
</div>
</body>
</html>

