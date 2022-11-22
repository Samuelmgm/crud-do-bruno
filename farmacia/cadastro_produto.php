<?php
    if(isset($_POST["nome_prod"])){
        $nome_prod = $_POST["nome_prod"];
    }
    
    if(isset($_POST["codigo_prod"])){
        $codigo_prod = $_POST["codigo_prod"];
    }

    if(isset($_POST["preco_prod"])){
        $preco_prod = $_POST["preco_prod"];
    }

    if(isset($_POST["quant_prod"])){
        $quantidade_prod = $_POST["quant_prod"];
    }

    if(isset($_POST["tipo"])){
        $tipo_prod = $_POST["tipo"];
    }

    if($nome_prod!="" and $codigo_prod!="" and $preco_prod!="" and $quantidade_prod!="" and $tipo_prod!=""){ 
        include 'conexao.php';
        $query = 'INSERT INTO produtos(nome_produto,codigo_produto,preco,quantidade,tipo) VALUES ("'.$nome_prod.'","'.$codigo_prod.'","'.$preco_prod.'","'.$quantidade_prod.'","'.$tipo_prod.'")';
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