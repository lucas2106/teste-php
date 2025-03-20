<?php
require 'config/db.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);

    if (!empty($title)) {
        $stmt = $pdo->prepare("INSERT INTO tasks (title, description) VALUES (:title, :description)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->execute();

        header("Location: index.php");
        exit();
    } else {
        $error = "O título da tarefa é obrigatório!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tarefa</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Adicionar Nova Tarefa</h1>
        
        <?php if (!empty($error)): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <form method="POST">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" required>

            <label for="description">Descrição:</label>
            <textarea name="description" id="description"></textarea>

            <button type="submit">Adicionar</button>
        </form>

        <a href="index.php" class="back-btn">Voltar</a>
    </div>
</body>
</html>
