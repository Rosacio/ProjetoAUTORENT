<?php
include("connection.php");
include("function.php");

$query = '';
$output = array();
$query .= "SELECT * FROM carro";
if(isset($_POST["search"]["value"])){
    $query .= 'where Marca LIKE "%' . $POST["search"]["value"] . '%" ';
    $quero .= 'OR Modelo LIKE "%' . $POST["search"]["value"] . '%" ';
}

if(isset($_POST["order"]))
{
    $query .= 'ORDER BY ' . $_POST['order']['0']['column'] . ' ' . $_POST['order']['0']['dir'] . ' ';

} else {
    $query .= 'ORDER BY id DESC';
}
if($_POST["length"] != -1){
    $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['lenght'];
}

$statement = $pdo->prepare($query); //atenção!!!!
$statement->execute();

$result = $statement->fetchAll();

$data = array();

$filtered_rows = $statement->rowCoun();

foreach($result as $row){
    $image = '';
    if($row["image"] != ''){
        $image = '<img src"upload/'. $row["image"].'" class="img-thumbnail" width="50" height="35" />';
    } else {
        $image = '';
    }

    $sub_array = array();

    $sub_array[] = $image;

    $sub_array[] = $row["Marca"];
    $sub_array[] = $row["Modelo"];
    $sub_array[] = $row["phora"];
    $sub_array[] = $row["disponibilidade"];
    $sub_array[] = $row["Onde alugar"];
    $sub_array[] = '<button type="button" name="update" id="' .$row["id"] . '" class="btn btn-warning btn-xs update">Atualizar</button>';
    $sub_array[] = '<button type="button" name="delete" id="' .$row["id"] . '" class="btn btn-danger btn-xs delete">Apagar</button>';

    $data[] = $sub_array;
}
$output = array(
    "draw" => intval($_POST['draw']),
    "recordsTotal" => $filtered_rows,
    "recordsFiltered" => get_total_all_records(),
    "data" => $data
);

echo json_encode($output);


?>