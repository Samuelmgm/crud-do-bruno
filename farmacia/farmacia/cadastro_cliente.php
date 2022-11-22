<?php
    $nome_cliente = isset($_POST["nome_cliente"]) ? $_POST["nome_cliente"] : null;
    $cpf_cliente = isset($_POST["cpf_cliente"]) ? $_POST["cpf_cliente"] : null;
    $email_cliente = isset($_POST["email_cliente"]) ? $_POST["email_cliente"] : null;

    if($nome_cliente!="" and $cpf_cliente!="" and $email_cliente!=""){
        include "conexao.php";
        $query = 'INSERT INTO cliente(nome,cpf,email) VALUES("'.$nome_cliente.'","'.$cpf_cliente.'","'.$email_cliente.'")';
        $result = mysqli_query($link,$query);
        mysqli_close($link);
    ?>
        <script>
            window.alert("Enviado com sucesso");
            window.location.href='index.php';
        </script>
    <?php
    }
?>