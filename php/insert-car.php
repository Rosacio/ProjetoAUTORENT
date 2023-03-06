<?php
	require_once 'connection.php';
 
	if(ISSET($_POST['inserir'])){
    try {
        $make = $_POST['make'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $mileage = $_POST['mileage'];
        $price = $_POST['price'];
        $sql = " insert into carro (make,model,year,mileage,price) values (:make,:model,:year,:mileage,:price);";
        $stmt = $pdo->prepare($sql);
        $total = $stmt->execute([':make' => $make, ':model' => $model,':year' => $year, ':mileage' => $mileage, ':price' => $price ]);
    }  catch(PDOException $e){
            echo $e->getMessage();
    }
    echo "Registo bem sucedido!";
	$pdo = null;
    header('Location: ../home.php');
	}
    
?>