<link rel="stylesheet" href="style.css">
<?php
require_once '_session.php';
require_once '_functions.php';

$loggedIn = $_SESSION['user']['loggedIn'] ?? false;
if (!$loggedIn) {
    header('Location: form-login.php');
    exit;
}


$noteId = $_GET['note'];
$note = getNoteContent($noteId);
if (!$note) {
    echo 'Note not found';
    exit;
}

// Update the note if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updatedContent = $_POST['content'];
    $stmt = $db->prepare('UPDATE notes SET content = ? WHERE id = ?');
    $stmt->execute([$updatedContent, $noteId]);

    // Refresh the note data after update
    $note['content'] = $updatedContent;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleview.css">
    <title><?php echo htmlspecialchars($note['title']); ?></title>
</head>

<body class="dark-mode"> <!-- Set dark mode as default -->
    <header>
        <h1><?php echo htmlspecialchars($note['title']); ?></h1>
        <!-- <button id="toggle-theme">Toggle Theme</button> -->
    </header>

    <main>
        <form method="POST" action="">
            <textarea name="content" rows="30"><?php echo htmlspecialchars($note['content']); ?></textarea><br>
            <button type="submit">Save</button>
        </form>
    </main>

    <footer>
        <a href="index.php">&lt; Back to Notes</a>
    </footer>

    <script>
        document.getElementById('toggle-theme').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            document.body.classList.toggle('light-mode');
        });
    </script>
</body>

</html>