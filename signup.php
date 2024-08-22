<?php
require_once '_functions.php';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
 
    // Check if the username already exists
    $stmt = $db->prepare('SELECT id FROM users WHERE username = ?');
    $stmt->execute([$username]);
    if ($stmt->fetch()) {
        echo 'Username already exists';
        exit;
    }
 
    // Insert user
    $stmt = $db->prepare('INSERT INTO users (forename, surname, username, password) VALUES (?, ?, ?, ?)');
    $stmt->execute([$forename, $surname, $username, $password]);
 
    header('Location: form-login.php');
    exit;
}
?>