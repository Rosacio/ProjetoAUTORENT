<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['car-id'];
  $make = $_POST['make'];
  $model = $_POST['model'];
  $year = $_POST['year'];
  $mileage = $_POST['mileage'];
  $price = $_POST['price'];

  $stmt = $pdo->prepare('UPDATE carro SET make = :make, model = :model, year = :year, mileage = :mileage, price = :price WHERE id = :id');
  $stmt->execute(['make' => $make, 'model' => $model, 'year' => $year, 'mileage' => $mileage, 'price' => $price, 'id' => $id]);

  header('Location: ../home.php');
}
?>
