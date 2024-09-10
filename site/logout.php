<?php
require_once '_session.php';
session_destroy();
header('Location: form-login.php');
exit;
?>