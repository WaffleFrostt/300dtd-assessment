<?php
require_once '_session.php';
require_once '_functions.php';

$loggedIn = $_SESSION['user']['loggedIn'] ?? false;
if (!$loggedIn) {
    header('Location: form-login.php');
    exit;
}

$userId = $_SESSION['user']['id'];
$folders = getFolders($userId);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Notes App</title>
</head>

<body class="dark-mode">

    <header class="header">
        <div class="header-container">
            <h1>Folders</h1>
            <div class="header-controls">
                <!-- <button id="toggle-theme">Toggle Theme</button> -->
                <a href="logout.php" class="logout">Logout</a>
            </div>
        </div>
    </header>

    <main class="main-content">
        <?php foreach ($folders as $folder): ?>
            <div class="folder">
                <h2>
                    <?php echo htmlspecialchars($folder['name']); ?>
                    <!-- Link to edit folder -->
                    <a href="edit_folder.php?folder_id=<?php echo $folder['id']; ?>" class="edit-folder-link">Edit</a>
                </h2>
                <?php $notes = getNotes($folder['id']); ?>
                <div class="notes">
                    <?php foreach ($notes as $note): ?>
                        <a href="view_note.php?note=<?php echo $note['id']; ?>" class="note">
                            <h3><?php echo htmlspecialchars($note['title']); ?></h3>
                            <p class="note-description"><?php echo htmlspecialchars($note['description']); ?></p>
                        </a>
                        <form action="delete_note.php" method="post" class="delete-form">
                            <input type="hidden" name="note_id" value="<?php echo $note['id']; ?>">
                            <button class="delete-button" type="submit" onclick="return confirm('Are you sure you want to delete this note?');">Delete</button>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </main>

    <footer>
        <a href="add_note.php" class="add-note">+</a>
    </footer>

    <script>
        document.getElementById('toggle-theme').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            document.body.classList.toggle('light-mode');
        });
    </script>
</body>

</html>