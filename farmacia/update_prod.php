<?php 
    include "conexao.php";
    $id = $_GET["id"];
    $action_produto = "execute-update";

    $query = 'SELECT * FROM produtos WHERE id_produtos= '.$_GET["id"];
    $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error());   
    $row = mysqli_fetch_row($result); 
    mysqli_close($link);
    
    print_r($row);
    $nome_prod = $row[1];
    $codigo_prod = $row[2];
    $preco_prod = $row[3];
    $quantidade_prod = $row[4];
    $tipo_prod = $row[5];
?>
   