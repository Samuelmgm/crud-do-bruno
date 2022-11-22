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
                    <th>Função</th>
                    <th>Ações</th>        
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'conexao.php';
                   
                    $query = 'SELECT * FROM funcionarios';
                    $result = mysqli_query($link,$query);
                    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <tr>
                                <td><?= $line["nome"]?></td>                               
                                <td><?= $line["cpf"]?></td>
                                <td><?= $line["email"]?></td>
                                <td><?= $line["funcao"]?></td>                                
                                <td>
                                    <a href='deletar_func.php?id=<?= $line["id_funcionarios"]?>&action=delete' class="delete">Deletar</a> ---  
                                    <a href='index.php?id=<?= $line["id_funcionarios"]?>&action=update_func' class="atualizar">Update</a>
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

