<?php
require_once '_session.php';
require_once '_functions.php';
 
$loggedIn = $_SESSION['user']['loggedIn'] ?? false;
if (!$loggedIn) {
    header('Location: form-login.php');
    exit;
}
 
$folderId = $_GET['id'];
 
// First, delete all notes within the folder
$stmt = $db->prepare('DELETE FROM notes WHERE folder_id = ?');
$stmt->execute([$folderId]);
 
// Then, delete the folder itself
$stmt = $db->prepare('DELETE FROM folders WHERE id = ? AND user_id = ?');
$result = $stmt->execute([$folderId, $_SESSION['user']['id']]);
 
if ($result) {
    header('Location: folders.php');
    exit;
} else {
    echo "Error deleting the folder.";
}
?>