<?php
    $nome_prod = isset($_POST["nome_prod"]) ? $_POST["nome_prod"] : null;
    $codigo_prod = isset($_POST["codigo_prod"]) ? $_POST["codigo_prod"] : null;
    $preco_prod = isset ($_POST["preco_prod"]) ? $_POST["preco_prod"] : null;
    $quantidade_prod = isset($_POST["quant_prod"]) ? $_POST["quant_prod"] : null;
    $tipo_prod = isset($_POST["tipo"]) ? $_POST["tipo"] : null;

    if($nome_prod!="" and $codigo_prod!="" and $preco_prod!="" and $quantidade_prod!="" and $tipo_prod!=""){ 
        include 'conexao.php';
        $query = 'INSERT INTO produtos(nome_produto,codigo_produto,preco,quantidade,tipo) VALUES ("'.$nome_prod.'","'.$codigo_prod.'","'.$preco_prod.'","'.$quantidade_prod.'","'.$tipo_prod.'")';
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