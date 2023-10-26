<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $sql = "SELECT id, username FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // ส่งลิงก์รีเซ็ตรหัสผ่านไปยังอีเมลของผู้ใช้
        // ในส่วนนี้คุณสามารถใช้ไลบรารีส่งอีเมล เช่น PHPMailer
        echo "ส่งลิงก์รีเซ็ตรหัสผ่านไปยังอีเมลของคุณ: " . $email;

        // สามารถเรียกฟังก์ชัน resetPassword และส่งอีเมลไปยังผู้ใช้ในนี่
        resetPassword($email);
    } else {
        echo "ไม่พบบัญชีผู้ใช้ที่เกี่ยวข้องกับอีเมลนี้";
    }
}

mysqli_close($conn);

function resetPassword($email) {
    // สร้างรหัสผ่านใหม่ (ในตัวอย่างนี้ใช้ฟังก์ชันสร้างรหัสผ่านสุ่ม)
    $newPassword = generateRandomPassword();

    // บันทึกรหัสผ่านใหม่ในฐานข้อมูล
    saveNewPasswordInDatabase($email, $newPassword);

    // ส่งอีเมลพร้อมรหัสผ่านใหม่ถึงผู้ใช้

    // นำผู้ใช้ไปยังหน้า newpassword.php
    header("Location: newpassword.php?email=" . $email);
}

function generateRandomPassword() {
    // สร้างรหัสผ่านสุ่ม (ในตัวอย่างนี้ใช้ฟังก์ชันสร้างรหัสผ่านสุ่ม)
    return bin2hex(random_bytes(8));
}

function saveNewPasswordInDatabase($email, $newPassword) {
    // บันทึกรหัสผ่านใหม่ลงในฐานข้อมูล
    // สามารถเขียนโค้ด SQL ในฟังชันนี้
    // และใช้ PDO หรือ MySQLi สำหรับการเชื่อมต่อกับฐานข้อมูล
}

function sendPasswordResetEmail($email, $newPassword) {
    // ส่งอีเมลพร้อมรหัสผ่านใหม่ไปยังผู้ใช้
    // ใช้ PHP mail() หรือหนังสือการส่งอีเมลอื่น ๆ ตามที่คุณต้องการ
}

?>
