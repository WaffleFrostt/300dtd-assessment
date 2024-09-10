Here is the code with correct indentation:

```php
<?php
require_once '_session.php';
require_once '_functions.php';

$loggedIn = $_SESSION['user']['loggedIn'] ?? false;
if (!$loggedIn) {
    header('Location: form-login.php');
    exit;
}

// Fetch folders from the database using a prepared statement
$stmt = $db->prepare('SELECT id, name FROM folders WHERE user_id = ?');
$stmt->execute([$_SESSION['user']['id']]);
$folders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Manage Folders</title>
</head>

<body class="light-mode">

    <header>
        <h1>Manage Folders</h1>
        <button id="toggle-theme">Toggle Theme</button>
    </header>

    <main>
        <ul>
            <?php foreach ($folders as $folder): ?>
                <li>
                    <?php echo htmlspecialchars($folder['name']); ?>
                    <a href="edit_folder.php?id=<?php echo $folder['id']; ?>">Edit</a>
                    <a href="delete_folder.php?id=<?php echo $folder['id']; ?>" onclick="return confirm('Are you sure you want to delete this folder and all its notes?');">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>

    <footer>
        <a href="index.php" class="add-note">&lt; Back to Notes</a>
    </footer>

    <script>
        document.getElementById('toggle-theme').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            document.body.classList.toggle('light-mode');
        });
    </script>

</body>

</html>
```