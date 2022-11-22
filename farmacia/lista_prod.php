<html>
    <head>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Nome do produto</th>
                    <th>Codigo do produto</th>
                    <th>preço do produto</th>
                    <th>Quantidade de produtos</th>
                    <th>Tipo do Produto</th>
                    <th>Ações</th>              
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'conexao.php';
                   
                    $query = 'SELECT * FROM produtos';
                    $result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error());
                    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <tr>
                                <td><?= $line["nome_produto"]?></td>                               
                                <td><?= $line["codigo_produto"]?></td>
                                <td><?= $line["preco"]?></td>
                                <td><?= $line["quantidade"]?></td>
                                <td><?= $line["tipo"]?></td>                                 
                                <td>
                                    <a href='deletar_prod.php?id=<?= $line["id_produtos"]?>&action=delete'>Deletar</a> ---  
                                    <a href='index.php?id=<?= $line["id_produtos"]?>&action_produto=update'>Update</a>
                                </td>
                            </tr>
                        <?php 
                        }
                    mysqli_close($link);
                ?>
            </tbody>
        </table>
    </body>
</html>

