<?php 
if (isset($_GET['txNome']) && isset($_GET['txAreaComentario'])) {
    $nome = $_GET['txNome'];
    $comentario = $_GET['txAreaComentario'];

}
?>

<html>
    <head>
        <title>Mob Fan ???</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="estilo1.css" media="screen" />
    </head>
    <body>
        <div class="row">
            <div class="col-12">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h3>O seu comentário foi enviado</h3>
                <a href="index.php">VOLTAR PARA O INÍCIO</a>
            </div>
        </div>
    </body>
</html>