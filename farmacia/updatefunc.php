<?php 
    include "conexao.php";
    $id = $_GET["id"];
    $action = "execute-update";

    $query = 'SELECT * FROM funcionarios WHERE id_funcionarios= '.$_GET["id"];
    $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error());   
    $row = mysqli_fetch_row($result); 
    mysqli_close($link);

    print_r($row);
    $cpf_func = $row[0];
    $nome_func = $row[1];
    $email_func = $row[2];
    $enviofuncao = $row[3];
    
   
?>
    