<?php
require 'config/db.php';

if (isset($_GET['id'], $_GET['status']) && ctype_digit($_GET['id']) && ($_GET['status'] === '0' || $_GET['status'] === '1')) {
    $id = (int) $_GET['id'];
    $status = (int) $_GET['status'];

    $stmt = $pdo->prepare("SELECT id FROM tasks WHERE id = ?");
    $stmt->execute([$id]);

    if ($stmt->fetch()) {
        $stmt = $pdo->prepare("UPDATE tasks SET status = ? WHERE id = ?");
        $stmt->execute([$status, $id]);
    }
}

header("Location: index.php");
exit;

