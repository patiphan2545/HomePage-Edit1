<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body {
    font-family: Arial, sans-serif;
    text-align: center;
    background: #ffffff;
}
        </style>
</head>
<body>
<div class="flex-container">
    <a href="help.php"><div class="frame-8"><div class="text-wrapper-4">Help</div></div></a>
    <div class="frame-9">
    <a href="../Contact/contact.php"><div class="text-wrapper-6">Contact</div></a>
</div>
<div class="icon-font-awesome">
<a href="../index.html"><img class="vector" src="img/home.png" /></a>
</div>
</div>
<div class="image"><img class="logo-followup1" src="img/logofollowup.png" /></div>

    <div class="container">
    <h2>Login</h2>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>

    <div class="links-container">
    <a href="../Register/register.php">Register here</a>
    <a href="../Fotgot_password/forgot_password.php">Forget password</a>
</div>


</div>
</body>
</html>
