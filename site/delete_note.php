<?php
require_once '_session.php';
require_once '_functions.php';
 
$loggedIn = $_SESSION['user']['loggedIn'] ?? false;
if (!$loggedIn) {
    header('Location: form-login.php');
    exit;
}
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $noteId = $_POST['note_id'];
 
    // Delete the note from the database
    $stmt = $db->prepare('DELETE FROM notes WHERE id = ?');
    $result = $stmt->execute([$noteId]);
 
    if ($result) {
        // Redirect back to the notes page if the deletion was successful
        header('Location: index.php');
        exit;
    } else {
        echo "Error deleting the note.";
    }
}