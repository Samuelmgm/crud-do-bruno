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
                    $result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error());
                    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <tr>
                                <td><?= $line["nome"]?></td>                               
                                <td><?= $line["cpf"]?></td>
                                <td><?= $line["email"]?></td>
                                <td><?= $line["funcao"]?></td>                                
                                <td>
                                    <a href='deletar.php?id=<?php echo $line["id"]?>&action=delete'>Deletar</a> ---  
                                    <a href='index.php?id=<?php echo $line["id"]?>&action=update'>Update</a>
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

