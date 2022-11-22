<?php
    include "conexao.php";

    $query = 'UPDATE cliente SET nome="'.$_POST["nome_cliente"].'", cpf="'.$_POST["cpf_cliente"].'", email="'.$_POST["email_cliente"].'" where id_cliente= '.$_POST["id"];
    $result = mysqli_query($link, $query); 
    mysqli_close($link);
?>  
    <script>
        window.alert("Atualizado com sucesso");
        window.location.href='index.php';
    </script>