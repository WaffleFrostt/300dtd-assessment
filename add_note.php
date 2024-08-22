<?php
require_once '_session.php';
require_once '_functions.php';

// Check if the user is logged in
$loggedIn = $_SESSION['user']['loggedIn'] ?? false;
if (!$loggedIn) {
    header('Location: form-login.php');
    exit;
}

$userId = $_SESSION['user']['id'];
$folders = getFolders($userId);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $folderId = $_POST['folder'];

    // Handle the creation of a new folder
    if ($folderId === 'new_folder') {
        $newFolderName = $_POST['new_folder_name'];
        $stmt = $db->prepare('INSERT INTO folders (name, user_id) VALUES (?, ?)');
        $stmt->execute([$newFolderName, $userId]);
        $folderId = $db->lastInsertId();
    }

    // Insert the note into the database
    $stmt = $db->prepare('INSERT INTO notes (title, description, content, folder_id, user_id) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$title, $description, $content, $folderId, $userId]);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleadd.css">
    <title>Add Note</title>
</head>

<body class="dark-mode">
    <header class="header">
        <h1>Add Note</h1>
    </header>
    <main class="main-content">
        <form action="add_note.php" method="post" class="note-form">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>

            <label for="content">Content:</label>
            <textarea id="content" name="content" required></textarea>

            <label for="folder">Select Folder:</label>
            <select id="folder" name="folder" required>
                <option value="">Select an existing folder</option>
                <?php foreach ($folders as $folder): ?>
                    <option value="<?php echo $folder['id']; ?>"><?php echo htmlspecialchars($folder['name']); ?></option>
                <?php endforeach; ?>
                <option value="new_folder">Create New Folder</option>
            </select>

            <div id="new_folder_section" class="new-folder-section" style="display: none;">
                <label for="new_folder_name">New Folder Name:</label>
                <input type="text" id="new_folder_name" name="new_folder_name">
            </div>

            <button type="submit" class="submit-button">Add Note</button>
        </form>
    </main>

    <footer>
        <a href="index.php" class="back-button">&lt; Back</a>
    </footer>

    <script>
        document.getElementById('folder').addEventListener('change', function() {
            var newFolderSection = document.getElementById('new_folder_section');
            if (this.value === 'new_folder') {
                newFolderSection.style.display = 'block';
            } else {
                newFolderSection.style.display = 'none';
            }
        });
    </script>
</body>

</html>