<?php
    include 'conexao.php';
    $query = 'delete from produtos where id_produtos = '.$_GET["id"];
    $result = mysqli_query($link, $query) or die('Query failed: ' .mysqli_error());
    mysqli_close($link);
    ?>
    <script>
        window.alert("Deletado com sucesso");
        window.location.href='index.php';
    </script>
    <?php
?>