<?php 
 include ('cnn.php');
  function btdelete($id,$idcar){
        return "<Button type='button' data-idcar='".$idcar."' id='".$id ."' class='btn btn-danger btn-sm m-2' name='btdel' ><span class='btn-label'><i class='bi bi-trash'></i></span></button>";
        
     }
     
    function btupdate($id,$idcli){
        return "<button type='button' data-idcli='$idcli' id='$idcli' class='btn btn-primary m-2 btn-sm' name='btedit'><span class='btn-label'><i class='bi bi-pen-fill'></i></span></button>";  
        
     }
 

 $sql ='select * from cliente ';
 /*
 if(isset($_POST['search']['value'])){
    $seek = $_POST['search']['value'];
    $sql .="where pu like '%".$seek."%'";
    $sql .="OR modelo like '%".$seek."%'";
    $sql .="OR classe like '%".$seek."%'";
 }

 if(isset($_POST['order']['value'])){
    $column = $_POST['order'][0]['column'];
    $order =$_POST['order'][0]['dir'];
    $sql .= " ORDER BY '" . $column ."'  " . $order;
    
}else{
    $sql .=" ORDER BY idcar ";
 }

 if($_POST['length']!=-1){
    $start =$_POST['start'];
    $length =$_POST['length'];
    $sql .= " LIMIT " . $start. ", " . $length;
 }
*/
 $data =[];
 $rows = $pdo->query($sql)->fetchAll();
 $count_all_rows = $pdo->query($sql)->rowCount();
 foreach($rows as $r){
   $subarray =[];
   $subarray[]= $r['Nome'];
   $subarray[]= $r['Apelido'];
   $subarray[]= $r['Telefone'];
   $subarray[]= $r['Email'];
   $subarray[]= $r['Morada'];
   $subarray[]= $r['Cidade'];
   $subarray[]= $r['Codigo Postal'];
   $subarray[]= $r['País'];
   $subarray[] = btdelete('del_'.$r['Idcliente'],$r['Idcliente']) . "|". btupdate('edit_'.$r['Idcliente'],$r['Idcliente'])  ;
   $data[]=$subarray;   
 }

 $output =array(
    'data'=>$data,
    'draw' =>intval($_POST['draw']),
    'recordsTotal'=>$count_all_rows,
    'recordsFiltered'=>$rows, 
);
echo json_encode($output);
?>