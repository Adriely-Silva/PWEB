<?php

session_start();

if (isset($_POST['item2'])) {
    $_SESSION["item2"] = $_POST['item2'];
    header("Location: pergunta3.php");
}

?>
<html>
    <head>
        <title>Quiz de frases de filmes</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    </head>
    <body>
        <form action="pergunta2.php" method="post">
            <div class="fundo-3">
                <div col-2>
                    <h2>Quizz</h2>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-12 central">
                        <img src="img/p2.png" alt="O Hobbit/ Harry Potter e o prisioneiro de Azkaban/ O senhor dos anéis">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3>De que frase é esse filme "Meu precioso"?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="a" name="item2" value="a"> a) O Hobbit
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="b" name="item2" value="b"> b) Harry Potter e o prisioneiro de Azkaban
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="c" name="item2" value="c"> c) O senhor dos anéis
                </div>
            </div>
            <input type="submit" class="botao fundo-3" value="Próxima" />
        </form>
    </body>
</html>