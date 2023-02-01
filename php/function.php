<?php
    function get_total_all_records(){
    include("connection.php");
    $statement = $pdo->prepare("SELECT * FROM carro");
    $statement->execute();
    return $statement->rowCount();
    }
?>