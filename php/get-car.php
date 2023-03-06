<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $id = $_GET['id'];

  $stmt = $pdo->prepare('SELECT * FROM carro WHERE id = :id');
  $stmt->execute(['id' => $id]);
  $car = $stmt->fetch(PDO::FETCH_ASSOC);

  header('Content-Type: application/json');
  echo json_encode($car);
}
?>

