<?php
    include "conexao.php";

    $query = 'UPDATE funcionarios SET nome="'.$_POST["nome"].'", cpf="'.$_POST["cpf"].'", email="'.$_POST["email"].'", funcao="'.$_POST["funcao"].'" where id_funcionarios= '.$_POST["id"];
    $result = mysqli_query($link, $query); 
    mysqli_close($link);
?>  
    <script>
        window.alert("Atualizado com sucesso");
        window.location.href='index.php';
    </script>