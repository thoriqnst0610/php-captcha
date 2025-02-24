
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login dengan CAPTCHA</title>
</head>
<body>
    <form action="verify.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" required>
        <br>
        
        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br>
        
        <div>
            <img src="captcha.php" alt="CAPTCHA">
            <br>
            <input type="text" name="captcha" required>
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>
