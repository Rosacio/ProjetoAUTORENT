<?php

session_start();
require_once 'php\connection.php';


if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    // Apagar carro
    $stmt = $pdo->prepare('DELETE FROM carro WHERE id = :id');
    $stmt->execute(['id' => $_GET['id']]);
    echo '<script>alert("Carro deletado com sucesso!");</script>';
    }
?>