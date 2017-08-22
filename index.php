<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title>Clientes</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>

<?php

require_once ("classes/Cliente.php");
require_once ("lista_clientes.php");

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
            Tabela de Clientes
        </h1>
    </div>

    <div class="row">

        <table class="tabela-lista-clientes display" cellspacing="0" width="100%">

            <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Endere&ccedil;o</th>
                <th>A&ccedil;ao</th>
            </tr>
            </thead>
            <tbody>
            <?php

            foreach($clientes as $i => $dados) {

                $cli[$i] = new Cliente($dados["nome"], $dados["telefone"], $dados["endereco"], $dados["cpf"]);

                ?>
                <tr>
                    <td><?php echo $cli[$i]->nome; ?></td>
                    <td><?php echo $cli[$i]->telefone; ?></td>
                    <td><?php echo $cli[$i]->endereco; ?></td>
                    <td><a href="editar.php?cli=<?php echo $i; ?>">Ver detalhes</a></td>
                </tr>

            <?php

            }

            ?>
            </tbody>

        </table>

    </div>

</div>

</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
        $('.tabela-lista-clientes').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.15/i18n/Portuguese-Brasil.json"
            }
        });
    });

</script>
</html>



