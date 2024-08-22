<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Login</title>
</head>
<body class="dark-mode">
    <header>
        <h1>Login</h1>
        <!-- <button id="toggle-theme">Toggle Theme</button> -->
    </header>
    <main>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="username" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
        <a href="form-signup.php">Sign Up</a>
    </main>
    <script>
        document.getElementById('toggle-theme').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            document.body.classList.toggle('light-mode');
        });
    </script>
</body>
</html>