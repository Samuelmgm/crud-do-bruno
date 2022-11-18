<?php
    if(isset($_POST["nome"])){
        $nome_func = $_POST["nome"];
    }
    
    if(isset($_POST["cpf"])){
        $cpf_func = $_POST["cpf"];
    }

    if(isset($_POST["email"])){
        $email_func = $_POST["email"];
    }

    if(isset($_POST["funcao"])){
        $enviofuncao = $_POST["funcao"];
    }

    if($nome_func!="" and $cpf_func!="" and $email_func!="" and $enviofuncao!=""){ 
        include 'conexao.php';
        $query = 'INSERT INTO funcionarios(nome,cpf,email,funcao) VALUES ("'.$nome_func.'","'.$cpf_func.'","'.$email_func.'","'.$enviofuncao.'")';
        $result = mysqli_query($link,$query) or die("query failed:".mysqli_error());
        mysqli_close($link);
        ?>
        <script>
            window.alert("Enviado com sucesso");
            window.location.href='index.php';
        </script>
        <?php
    }
       
?>