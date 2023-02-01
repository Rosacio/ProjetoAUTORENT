<?php
#Include the connect.php file
include ('connect.php');
// Connect to the database
$mysqli = new mysqli($hostname, $username, $password, $database);
/* check connection */
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
// get data and store in a json array
$from = 0;
$to = 30;
$query = "SELECT Nome, Apelido, Telefone, Email, Morada, Cidade, CodigoPostal, Pais FROM cliente LIMIT ?,?";
$result = $mysqli->prepare($query);
$result->bind_param('ii', $from, $to);
$result->execute();
/* bind result variables */
$result->bind_result($Nome, $Apelido, $Telefone, $Email, $Morada, $Cidade, $CodigoPostal, $Pais);
/* fetch values */
while ($result->fetch())
	{
	$cliente[] = array(
		'Nome' => $CompanyName,
		'Apelido' => $ContactName,
		'Telefone' => $ContactTitle,
		'Email' => $Address,
		'Morada' => $Morada,
		'Cidade' => $Cidade,
		'Codigo_postal' => $CodigoPostal,
        'Pais' => $Pais
	);
	}
echo json_encode($cliente);
/* close statement */
$result->close();
/* close connection */
$mysqli->close();
?>