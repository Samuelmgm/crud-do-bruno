<?php
    include "conexao.php";

    $query = 'UPDATE produtos SET nome_produto='.$_POST["nome_prod"].', codigo_produto="'.$_POST["codigo_prod"].'", preco="'.$_POST["preco"].'", quantidade="'.$_POST["quant_prod"].'", tipo="'.$_POST["tipo"].'" where id_produtos= '.$_POST["id"];
    $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error());  
    mysqli_close($link);
?>  
    <script>
        window.alert("Atualizado com sucesso");
        window.location.href='index.php';
    </script>    