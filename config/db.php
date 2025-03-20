<?php

$host = 'localhost';
$dbname = 'todo_list';
$user = 'root';  
$password = '';  

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    
    die("Erro na conexão com o banco de dados. Por favor, tente novamente mais tarde.");
}
?>
