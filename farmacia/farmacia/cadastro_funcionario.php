<?php
    $nome_func = isset($_POST["nome"]) ? $_POST["nome"] : null;
    $cpf_func = isset($_POST["cpf"]) ? $_POST["cpf"] : null;
    $email_func = isset($_POST["email"]) ? $_POST["email"] : null;
    $enviofuncao = isset($_POST["funcao"]) ? $_POST["funcao"] : null;
      
    if($nome_func!="" and $cpf_func!="" and $email_func!="" and $enviofuncao!=""){ 
        include 'conexao.php';
        $query = 'INSERT INTO funcionarios(nome,cpf,email,funcao) VALUES ("'.$nome_func.'","'.$cpf_func.'","'.$email_func.'","'.$enviofuncao.'")';
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
<a href="index.php">Voltar</a>