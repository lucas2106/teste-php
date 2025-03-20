<?php
require 'config/db.php';

$statusFilter = isset($_GET['status']) ? (int)$_GET['status'] : null;

$query = "SELECT * FROM tasks";
if ($statusFilter !== null && ($statusFilter == 0 || $statusFilter == 1)) {
    $query .= " WHERE status = :status";
}

$stmt = $pdo->prepare($query);
if ($statusFilter !== null && ($statusFilter == 0 || $statusFilter == 1)) {
    $stmt->bindParam(':status', $statusFilter, PDO::PARAM_INT);
}

$stmt->execute();
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Tarefas</h1>

        <!-- Formulário de filtro -->
        <form method="GET" class="filter-form">
            <label for="status">Filtrar por status:</label>
            <select name="status" id="status" onchange="this.form.submit()">
                <option value="">Todos</option>
                <option value="0" <?= ($statusFilter === 0) ? 'selected' : '' ?>>Pendente</option>
                <option value="1" <?= ($statusFilter === 1) ? 'selected' : '' ?>>Concluído</option>
            </select>
        </form>

        <table>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($tasks as $task): ?>
            <tr class="<?= $task['status'] ? 'completed' : '' ?>">
                <td><?= htmlspecialchars($task['title']) ?></td>
                <td><?= htmlspecialchars($task['description']) ?></td>
                <td><?= $task['status'] ? '✅ Concluído' : '⏳ Pendente' ?></td>
                <td>
                    <a href="edit.php?id=<?= $task['id'] ?>">✏️ Editar</a> |
                    <a href="delete.php?id=<?= $task['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">❌ Excluir</a> |
                    <a href="complete.php?id=<?= $task['id'] ?>">
                        <?= $task['status'] ? '⏳ Marcar como Pendente' : '✅ Marcar como Concluído' ?>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <a href="add.php" class="add-btn">➕ Adicionar Nova Tarefa</a>
    </div>
</body>
</html>
