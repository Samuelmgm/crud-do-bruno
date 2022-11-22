<html>
    <head>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>email</th>
                    <th>Ações</th>               
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'conexao.php';
                   
                    $query = 'SELECT * FROM cliente';
                    $result = mysqli_query($link,$query);
                    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <tr>
                                <td><?= $line["nome"]?></td>                               
                                <td><?= $line["cpf"]?></td>
                                <td><?= $line["email"]?></td>                                                              
                                <td>
                                    <a href='deletar_cliente.php?id=<?= $line["id_cliente"]?>&action=delete' class="delete">Deletar</a>---
                                    <a href='index.php?id=<?= $line["id_cliente"]?>&action_cliente=update_cliente' class="atualizar">Update</a> 
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

