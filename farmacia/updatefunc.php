<?php 
    include "conexao.php";
    $id = $_GET["id"];
    $action = "execute-update";

    $query = 'update funcionarios set nomefunc='.$_POST["nome"].', cpf="'.$_POST["cpf"].'", email="'.$_POST["email"].'", funcao="'.$_POST["funcao"].'" where id_funcionarios= '.$_POST["id"];
    $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error());   
    mysqli_close($link);

    $query = 'select nome, cpf, email, funcao from aluno where id_funcionarios= '.$_GET["id"];
    $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error());   
    $row = mysqli_fetch_row($result); 
    mysqli_close($link);
    print_r($row);
    $nome_func = $row[0];
    $cpf_func = $row[1];
    $email_func = $row[2];
    $funcao = $row[3];
?>
    <script>
        window.alert("Atualizado com sucesso");
        window.location.href='index.php';
    </script>
    