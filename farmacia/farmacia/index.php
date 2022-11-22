<!DOCTYPE html>
<html lang="pt-BR">
    <?php
       
        $funcao = array("Estagiário","Vendedor","Entregador","Farmacêutico");
        $status = array("ativo" => "Ativo","desativado" => "Desativavdo");
        $nav = array("home" => "Home","funcionarios" => "Funcionários","produtos" => "Produtos","clientes" => "Clientes","fornecedores" => "Fornecedores","vendas" => "Vendas");  
        $produtos = array("med"=>"Medicamentos","cos"=>"Cosméticos","limpeza"=>"Saneantes","comida"=>"Alimentos","coisas de saude"=>"Produtos para Saúde","pet" =>"Pet");
        
        $nome_func = "";
        $cpf_func = "";
        $email_func = "";
        $enviofuncao = "";

        $nome_prod = "";
        $codigo_prod = "";
        $preco_prod = "";
        $quantidade_prod = "";
        $tipo_prod = "";

        $nome_cliente = "";
        $cpf_cliente = "";
        $email_cliente = "";

        $id = "";

        $action = "cadastro_funcionario.php";  
        $action_produto = "cadastro_produto.php";
        $action_cliente = "cadastro_cliente.php";    
        
        if(isset($_GET["action"]) and $_GET["action"]=="update_func"){
            include 'update_func.php';
            $action = "selecionar_func.php";
        }
        if(isset($_GET["action_produto"]) and $_GET["action_produto"]=="update_prod"){ 
            include 'update_prod.php';       
            $action_produto = "selecionar_prod.php";     
        }
        if(isset($_GET["action_cliente"]) and $_GET["action_cliente"]=="update_cliente"){ 
            include 'update_cliente.php';    
            $action_cliente = 'selecionar_cliente.php';     
        }
        
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
                <input type="text" name="nome" id="nomefunc" value="<?= $nome_func ?>">
                <label for="cpf">Cpf</label>
                <input type="number" id="cpf" name="cpf" value="<?= $cpf_func ?>">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" value="<?= $email_func ?>">
                <label for="funcao">Função</label>
                <select name="funcao" id="funcao">
                    <?php
                        foreach($funcao as $f){?>
                            <option value="<?=$f?>"><?=$f?></option>
                    <?php } ?>                
                </select>
                <?php
                    if($id!=""){?>
                        <input type="hidden" value="<?= $id;?>" name="id">
                <?php } ?>
                <button type="submit" class="btn">Registrar</button>          
            </form>          
            <div>
                <?php
                    include "lista_func.php";
                ?>
            </div>    
        </fieldset>
          
        <fieldset id="produtos" class="content">
            <legend>Registro de Produto</legend>
            <form action="<?= $action_produto?>" method="post">
                <label for="nome_prod">Nome do produtos:</label>
                <input type="text" id="nome_prod" name="nome_prod" value="<?= $nome_prod ?>" require>
                <label for="cod_prod">Código do Produto:</label>
                <input type="number" id="cod_prod" name="codigo_prod" value="<?= $codigo_prod?>" require>
                <label for="preco_prod">Preço:</label>
                <input type="text" id="preco_prod" name="preco_prod" value="<?= $preco_prod?>">
                <label for="quant_prod">Quantidade:</label>
                <input type="number" name="quant_prod" id="quant_prod" value="<?= $quantidade_prod?>">
                <label for="tipo_prod">Tipo do Produto</label>
                <select name="tipo" id="tipo_prod">
                    <?php
                        foreach($produtos as $key => $value){?>
                            <option value="<?= $key ?>"><?= $value?></option>
                    <?php } ?>               
                </select>
                <?php
                    if($id!=""){?>
                        <input type="hidden" value="<?= $id;?>" name="id">
                <?php } ?>
                    <button type="submit" class="btn">Registrar</button>
            </form>
            <div>
                <?php
                    include "lista_prod.php";
                ?>
            </div>   
        </fieldset>
        <fieldset id="clientes" class="content">
            <legend>Registro de clientes</legend>
            <form action="<?=$action_cliente?>" method="post">
                <label for="nome_cliente">Nome:</label>
                <input type="text" name="nome_cliente" id="nome_cliente" value="<?= $nome_cliente ?>">
                <label for="cpf_cliente">CPF:</label>
                <input type="number" name="cpf_cliente" id="cpf_cliente" value="<?= $cpf_cliente ?>">
                <label for="email_cliente">E-mail:</label>
                <input type="text" id="email_cliente" name="email_cliente" value="<?= $email_cliente ?>">
                <?php
                    if($id!=""){?>
                        <input type="hidden" value="<?= $id;?>" name="id">
                <?php } ?>
                <button type="submit" class="btn">Registrar</button>
            </form>
            <div>
                <?php
                    include "lista_cliente.php";
                ?>
            </div>  
        </fieldset>
        <fieldset id="fornecedores" class="content">
            <legend>Registro de Fornecedor</legend>
            <form action="" method="post">
                <label for="nome_fornecedor">Nome:</label>
                <input type="text" name="nome_fornecedor" id="nome_fornecedor">
                <label for="tel_fornecedor">Telefone:</label>
                <input type="number" id="tel_fornecedor" name="tel_fornecedor">
                <p>Status</p>
                    <?php 
                        foreach($status as $key => $value){ ?>
                            <label for="<?= $key ?>"><?= $value ?></label>
                            <input type="radio" value="<?= $value ?>" name="status" id="<?= $key ?>">       
                    <?php } ?>
                                       
                <button type="submit" class="btn">Registrar</button>
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
            print_r($_GET);
            print_r($row);
        ?>
    </body>
</html>