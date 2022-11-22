<?php 
    include "conexao.php";
    $id = isset($_GET["id"]) ? $_GET["id"] : null;

    $query = 'SELECT * FROM cliente WHERE id_cliente= '.$_GET["id"];
    $result = mysqli_query($link, $query);   
    $row = mysqli_fetch_row($result); 
    mysqli_close($link);

    print_r($row);
    $nome_cliente = $row[1]; 
    $cpf_cliente = $row[2];  
    $email_cliente = $row[3];
?>