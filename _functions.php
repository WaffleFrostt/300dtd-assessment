<?php
$dsn = 'mysql:host=localhost;dbname=tmeldrum_300_2ndassess';
$username = 'tmeldrum';
$password = 'ap9dYt#s';
 
try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

function getFolderById($folderId, $userId)
{
    global $db;  // Assuming you have a $db variable for your database connection

    $stmt = $db->prepare('SELECT * FROM folders WHERE id = ? AND user_id = ?');
    $stmt->execute([$folderId, $userId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

 
function getFolders($userId) {
    global $db;
    $stmt = $db->prepare('SELECT id, name FROM folders WHERE user_id = ?');
    $stmt->execute([$userId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
 
function getNotes($folderId) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM notes WHERE folder_id = ?');
    $stmt->execute([$folderId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
 
function getNoteContent($noteId) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM notes WHERE id = ?');
    $stmt->execute([$noteId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getNotesByFolder($folderId, $userId) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM notes WHERE folder_id = ? AND user_id = ?');
    $stmt->execute([$folderId, $userId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>