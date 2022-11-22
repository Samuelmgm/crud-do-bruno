<?php
    include 'conexao.php';
    $query = 'delete from funcionarios where id_funcionarios = '.$_GET["id"];
    $result = mysqli_query($link, $query);
    mysqli_close($link);
    ?>
    <script>
        window.alert("Deletado com sucesso");
        window.location.href='index.php';
    </script>
    <?php
?>