<?php
    include 'conecta.php';
    $query = 'delete from funcionarios where id= '.$_GET["id"];
    $result = mysqli_query($link, $query) or die('Query failed: ' .mysqli_error());
    mysqli_close($link);
    ?>
    <script>
        window.alert("Deletado com sucesso");
        window.location.href("listafunc.php");
    </script>
    <?php
?>