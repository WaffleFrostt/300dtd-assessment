<?php
require_once '_session.php';
require_once '_functions.php';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // Fetch user from the database
    $stmt = $db->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username]);
// ___________________________________________________________________________________________________________________________________________
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
 
    if ($user && password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION['user'] = [
            'id' => $user['id'],
            'forename' => $user['forename'],
            'surname' => $user['surname'],
            'loggedIn' => true
        ];
        header('Location: index.php');
        exit;
    } else {
        echo 'Invalid username or password';
    }
}
?>