<?php
    define('NL', '<br>');

    include ('connection.php');



    Class Cliente{
    private $pdo;
        public function __construct($dbname, $host, $user,$senha){
            try{
                $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
            }catch (PDOException $e){
                echo "Erro com banco de dados:" . $e->getMessage();
                exit();
            }catch(Exception $e) {
                echo "Erro:" . $e->getMessage();
                exit();
            }
        }
        public function findData() {
        $sql = 'select * from clientes ORDER BY Nome;';
        $stmt = $this -> pdo -> query($sql);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
        }
    }

/*
    $modelo = 'Capri';
    $pu =23.56;
    $sql = " insert into carros (modelo, pu) values (:modelo, :pu);";
    $stmt = $pdo->prepare($sql);
    $total = $stmt-> execute([':modelo' => $modelo, ':pu' => $pu]);
    */

    // $pu = 650.00;
    // $modelo = '%ferrari%';
    // $sql = "update carros set pu = :pu where modelo like :modelo;";
    // $stmt = $pdo->prepare($sql);
    // $total = $stmt->execute([':pu' => $pu, ':modelo' => $modelo]);

    // $idcar = 3;
    // $sql = 'delete from carros where idcar = :idcar ;';
    // $stmt =$pdo->prepare($sql);
    // $stmt->bindParam(':idcar', $idcar, PDO::PARAM_INT);
    // $total = $stmt -> execute();

    //  echo 'Total:' . $total . '<br>';
    //  $stmt = $pdo->query("select * from carros");
    //  while($row=$stmt->fetch()){
    //      echo $row['idcar'] . "  " .$row['modelo'] . $row['pu'] . '<br>';
    //  }

    // $idcli=2;
    // $sql = "call sp_zeca(:idcli,@nome);";
    // $stmt = $pdo->prepare($sql);
    // $stmt -> execute([':idcli' => $idcli]);
    // $stmt2 = $pdo ->query('select @nome as XXX');
    
    // print_r($stmt2 ->fetch());


    // define('NL', '<br>');
    //     include ('cnn.php');
    //     $sql='select * from clientes;';
    //     $stmt =$pdo->query($sql);
    //     while($row = $stmt->fetch()){
    //         echo $row['idcli']. ' -- ' . $row['nome'] . '<br>';
    //     }
    
    // echo NL;
    // $clientes = $pdo->query($sql) ->fetchAll();
    // //var_dump($clientes);
    
    // echo '<table border="1">';
    // foreach($clientes as $registo){
    //    // echo $registo['idcli'] . ' -- ' . $registo['nome'] . NL;
    //     echo "<tr><td>" . $registo['idcli'] . "</td><td>" . $registo['nome'] . "</td></tr>";
    // }
    // echo '</table>';
    
    // echo NL;
    
    
    // echo NL . 'Estes são os alfa' . NL;
    
    // $class = 'Alfa';
    // $sql = 'select * from clientes where class like ? ;';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$class]);
    // $clientes = $stmt->fetchAll();
    // foreach($clientes as $item){
    //     echo $item['nome'] . " é " . $item['class'] . NL ;
    // }
    // echo "Total=" . $stmt->rowCount();
    
    
    // $idcli = 3;
    // echo NL . 'O meu cliente favorito' . NL;
    // $sql = "select * from clientes where idcli = :idcli;"; //
    // $stmt = $pdo -> prepare ($sql);
    // $stmt -> execute([':idcli' =>$idcli]);
    // $cliente = $stmt -> fetch();
    // echo $cliente['nome'];
    
    // $idcli=2;
    // echo NL . 'O cliente mais chato'. NL ;
    // $sql = "select * from clientes where idcli = :idcli;"; //
    // $stmt = $pdo -> prepare ($sql);
    // $stmt->bindParam(':idcli', $idcli,PDO::PARAM_INT);
    // $stmt->execute();
    // print_r($stmt->fetch());
    
    // $proxid = $pdo->query('select max(idcli) from clientes;') -> fetchColumn();
    // echo NL.NL."NEXT ID:" . $proxid ;
    
    // //echo $clientes[1]['nome'];
    


?>
