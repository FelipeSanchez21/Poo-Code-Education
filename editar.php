<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title>Detalhes do clientes</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>

<?php

    require_once ("classes/Cliente.php");
    require_once ("lista_clientes.php");

    $id_cliente = $_GET["cli"];
    $cliente = new Cliente($clientes[$id_cliente]["nome"], $clientes[$id_cliente]["telefone"], $clientes[$id_cliente]["endereco"], $clientes[$id_cliente]["cpf"]);

?>

<div class="navbar navbar-inverse" style="position: static;">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".subnav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Controle de Clientes</a>
            <div class="nav-collapse subnav-collapse">
                <ul class="nav">
                    <li class="active"><a href="#">Tabela de Clientes</a></li>
                </ul>
            </div><!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div>

<div class="container">

    <ul class="breadcrumb">
        <li><a href="#">Início</a> <span class="divider">/</span></li>
        <li><a href="#">Clientes</a> <span class="divider">/</span></li>
        <li class="active">Tabela de clientes</li>
    </ul>

    <div class="row">
        <h1>
            Detalhes do Cliente
        </h1>
    </div>

    <div class="row">

        <b>Nome do cliente </b><br>
        <?php echo $cliente->nome; ?><br><br>
        <b>Endere&ccedil;o </b><br>
        <?php echo $cliente->endereco; ?><br><br>
        <b>Telefone </b><br>
        <?php echo $cliente->telefone; ?><br><br>
        <b>CPF </b><br>
        <?php echo $cliente->cpf; ?><br><br>

        <a href="/pooEnvia"><button type="button" name="btnVoltar" class="btn btn-info">Voltar</button></a>

    </div>

</div>

</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</html>



