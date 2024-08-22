<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesignup.css">
    <title>Sign Up</title>
</head>

<body class="dark-mode">
    <header>
        <h1>Sign Up</h1>
        <!-- <button id="toggle-theme">Toggle Theme</button> -->
    </header>
    <main>
        <form action="signup.php" method="post">
            <label for="forename">Forename:</label>
            <input type="text" id="forename" name="forename" required>
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" required>
            <label for="username">Username:</label>
            <input type="username" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Sign Up</button>
        </form>
        <a href="form-login.php">Login</a>
    </main>
    <script>
        document.getElementById('toggle-theme').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            document.body.classList.toggle('light-mode');
        });
    </script>
</body>

</html>