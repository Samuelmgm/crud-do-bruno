<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $funcao = array("Estagiário","Vendedor","Entregador","Farmacêutico");
        $enviofuncao = "";
        $nav = array("home" => "Home","funcionarios" => "Funcionários","produtos" => "Produtos","clientes" => "Clientes","fornecedores" => "Fornecedores","vendas" => "Vendas");  
        $nome_func = "";
        $cpf_func = "";
        $email_func = "";
        $produtos = array("med"=>"Medicamentos","cos"=>"Cosméticos","limpeza"=>"Saneantes","comida"=>"Alimentos","coisas de saude"=>"Produtos para Saúde","pet" =>"Pet");
        $action = "cadastro_funcionario.php";
        $id = "";
    ?>
    <head>
        <link rel="stylesheet" href="Style.CSS">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="Script.js"></script>
        <title>Farmácia</title>     
    </head>
    <body>
        <header>
            <ul class="nav-bar">
                <?php
                    foreach($nav as $key => $value){?>
                        <li><a for="<?=$key?>"><?=$nav[$key]?></a></li>
                <?php } ?>          
            </ul>
        </header>
        <div>
            <h1>Farmácia</h1>
            <p>Programinha de Farmácia</p>
            <fieldset id="home" class="content">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum praesentium, a maxime molestiae ea fugiat, nemo distinctio veritatis minima architecto accusantium quis repellat unde vel eveniet iste dignissimos! Iusto, amet!</p>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae et quia est optio corrupti odit sint nostrum temporibus assumenda consequuntur quo blanditiis facilis quam quae porro, beatae veniam? Neque, facere?</p>
            </fieldset>       
        </div>
        <fieldset id="funcionarios" class="content">
            <legend>Cadastro de funcionário</legend>
            <form action="<?= $action?>" method="post">
                <label for="nomefunc">Nome</label>
                <input type="text" name="nome" id="nomefunc">
                <label for="cpf">Cpf</label>
                <input type="number" id="cpf" name="cpf">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email">
                <label for="funcao">Função</label>
                <select name="funcao" id="funcao">
                    <?php
                        foreach($funcao as $f){?>
                            <option value="<?=$f?>"><?=$f?></option>
                    <?php } ?>                
                </select>
                <button type="submit" class="btn">Registrar</button>              
            </form>          
            <div>
                <?php
                    include "listafunc.php";
                ?>
            </div>    
        </fieldset>  
        <fieldset id="produtos" class="content">
            <legend>Registro de Produto</legend>
            <form action="" method="post">
                <label for="nome_prod">Nome do produtos:</label>
                <input type="text" id="nome_prod" name="nome do produto">
                <label for="cod_prod">Código do Produto:</label>
                <input type="number" id="cod_prod" name="codigo do produto">
                <label for="preco_prod">Preço:</label>
                <input type="number" id="preco_prod" name="preco_prod">
                <label for="quant_prod">Quantidade:</label>
                <input type="number" name="quant_prod" id="quant_prod">
                <label for="prod">Tipo do Produto</label>
                <select name="produto" id="prod">
                    <?php
                        foreach($produtos as $key => $value){?>
                            <option value="<?php $produtos[$key] ?>"><?= $value?></option>
                    <?php } ?>               
                </select>
                    <button type="submit" class="btn">Registrar</button>
            </form>
        </fieldset>
        <fieldset id="clientes" class="content">
            <legend>Registro de clientes</legend>
            <form action="" method="post">
                <label for="nome_cliente">Nome:</label>
                <input type="text" name="nome_cliente" id="nome_cliente">
                <label for="cpf_cliente">CPF:</label>
                <input type="number" name="cpf_cliente" id="cpf_cliente">
                <label for="email_cliente">E-mail:</label>
                <input type="text" id="email_cliente" name="email_cliente">
                <button type="submit" class="btn">Registrar</button>
            </form>
        </fieldset>
        <fieldset id="fornecedores" class="content">
            <legend>Registro de Fornecedor</legend>
            <form action="" method="post">
                <label for="nome_fornecedor">Nome:</label>
                <input type="text" name="nome_fornecedor" id="nome_fornecedor">
                <label for="tel_fornecedor">Telefone:</label>
                <input type="number" id="tel_fornecedor" name="tel_fornecedor">
                <p>Status</p>
                <input type="radio" value="ativado" id="ativo" name="status">
                <label for="ativo">Ativo</label>
                <input type="radio" value="desativado" id="desativado" name="status">
                <label for="desativado">Desativado</label>
                <button type="submit">Registrar</button>
            </form>
        </fieldset>
        <fieldset id="vendas" class="content">
            <legend>Registro de Vendas</legend>
            <form action="" method="post">
                <label for="v_nome_prod">Nome:</label>
                <input type="text" name="v_nome_prod" id="v_nome_prod">
                <label for="v_codigo_prod">Código</label>
                <input type="number" id="v_codigo_prod" name="v_codigo_prod">
                <label for="v_quant_prod">Quantidade:</label>
                <input type="number" name="v_quant_prod" id="v_quant_prod">
                <label for="v_tipo_prod">Tipo do Produto</label>
                <select name="produto" id="v_tipo_prod">
                    <?php
                        foreach($produtos as $key => $value){?>
                            <option value="<?php $produtos[$key] ?>"><?= $value?></option>
                    <?php } ?>               
                </select>
                    <button type="submit" class="btn">Registrar</button>
            </form>
        </fieldset>
        <div>
            <button id="btron" class="colorido">Modo Rave</button>
            <button id="btroff" class="colorido">Modo Rave</button>
        </div>
        <?php
            print_r($_POST);
        ?>
    </body>
</html>