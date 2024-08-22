<?php
require_once '_session.php';
require_once '_functions.php';

$loggedIn = $_SESSION['user']['loggedIn'] ?? false;
if (!$loggedIn) {
    header('Location: form-login.php');
    exit;
}

$userId = $_SESSION['user']['id'];
$folderId = $_GET['folder_id'] ?? null;

if ($folderId === null) {
    header('Location: index.php');
    exit;
}

// Fetch folder details
$folder = getFolderById($folderId, $userId);

if (!$folder) {
    // Folder not found or doesn't belong to the user
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update'])) {
        // Handle folder update
        $newFolderName = $_POST['folder_name'];

        if ($newFolderName) {
            $stmt = $db->prepare('UPDATE folders SET name = ? WHERE id = ? AND user_id = ?');
            $stmt->execute([$newFolderName, $folderId, $userId]);
            header('Location: index.php');
            exit;
        } else {
            $error = "Folder name cannot be empty.";
        }
    } elseif (isset($_POST['delete'])) {
        // Handle folder deletion

        // First, delete all notes associated with this folder
        $stmt = $db->prepare('DELETE FROM notes WHERE folder_id = ? AND user_id = ?');
        $stmt->execute([$folderId, $userId]);

        // Then, delete the folder itself
        $stmt = $db->prepare('DELETE FROM folders WHERE id = ? AND user_id = ?');
        $stmt->execute([$folderId, $userId]);

        header('Location: index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Folder</title>
</head>

<body class="dark-mode">
    <header class="header">
        <div class="header-container">
            <h1>Edit Folder</h1>
            <div class="header-controls">
                <a href="logout.php" class="logout">Logout</a>
            </div>
        </div>
    </header>

    <main class="main-content">
        <form action="edit_folder.php?folder_id=<?php echo htmlspecialchars($folderId); ?>" method="post" class="edit-folder-form">
            <label for="folder_name">Folder Name:</label>
            <input type="text" id="folder_name" name="folder_name" value="<?php echo htmlspecialchars($folder['name']); ?>" required>

            <?php if (isset($error)): ?>
                <p class="error-message"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>

            <button type="submit" name="update" class="submit-button">Update Folder</button>
        </form>

        <!-- Delete Folder Form -->
        <form action="edit_folder.php?folder_id=<?php echo htmlspecialchars($folderId); ?>" method="post" class="delete-folder-form" onsubmit="return confirm('Are you sure you want to delete this folder? All notes within this folder will also be deleted. This action cannot be undone.');">
            <button type="submit" name="delete" class="delete-button">Delete Folder</button>
        </form>
    </main>

    <footer>
        <a href="index.php" class="back-button">&lt; Back</a>
    </footer>

</body>

</html>