<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Master Password</title>
    <link rel="stylesheet" href="styles.css">
            <!-- return home -->
            <a href="index.php">Home</a>
</head>
<body>
    
</body>
</html>

<?php

require_once '_session.php';
require_once '_functions.php';

consoleLog($_POST, 'Form Data');

// Get the form data
$pass = $_POST['pass'];

// Hash the password
$hash = password_hash($pass, PASSWORD_DEFAULT);
consoleLog($hash, 'Hashed Password');

$db = connectToDB();
// Add the user data
$query = 'INSERT INTO users (hash) VALUES (?)';
$stmt = $db->prepare($query);
$stmt->execute([$hash]);

echo '<h2> Master Password Created </h2>';
