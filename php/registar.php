<?php
	session_start();
	require_once 'connection.php';
 
	if(ISSET($_POST['register'])){
    try {
        $firstname = $_POST['Nome'];
		$lastname = $_POST['Apelido'];
        $telefone = $_POST['Telefone'];
		$username = $_POST['Email'];
				// md5 encrypted
				// $password = md5($_POST['password']);
		$password = $_POST['Pass'];
        $morada = $_POST['Morada'];
        $cidade = $_POST['Cidade'];
        $codigopostal = $_POST['CodigoPostal'];
        $pais = $_POST['Pais'];
        $modelo = 'Capri';
        $pu = 23.56;
        $sql = " insert into cliente (Nome,Apelido,Telefone,Email,Pass,Morada,Cidade,Codigo_Postal,Pais) values (:nome,:apelido,:telefone,:email,:pass,:morada,:cidade,:codigopostal,:pais);";
        $stmt = $pdo->prepare($sql);
        $total = $stmt->execute([':nome' => $firstname, ':apelido' => $lastname, ':telefone' => $telefone,':email' => $username, ':pass' => $password, ':morada' => $morada, ':cidade' => $cidade, ':codigopostal' => $codigopostal,':pais' => $pais]);
    }  catch(PDOException $e){
            echo $e->getMessage();
    }
    echo "<h1>Registo bem sucedido!</h1>";
	$pdo = null;
    header('location: ../criarConta.php');
	}
    
?>