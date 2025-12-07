<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        form { width: 300px; margin: auto; }
    </style>
</head>
<body>

    <h2>Login</h2>
    <form action="login_process.php" method="POST">
        <input type="email" name="email" placeholder="Enter Email" required><br><br>
        <input type="password" name="password" placeholder="Enter Password" required><br><br>
        <button type="submit">Login</button>
    </form>

</body>
</html>