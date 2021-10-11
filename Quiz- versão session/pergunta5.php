<?php

session_start();

if (isset($_POST['item5'])) {
    $_SESSION["item5"] = $_POST['item5'];
    header("Location: resultado.php");
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
        <form action="pergunta5.php" method="post">
            <div class="fundo-6">
                <div col-2>
                    <h2>Quizz</h2>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-12 central">
                        <img src="img/p5.png" alt="O exterminador do futuro/ O exterminador do futuro 2 - o julgamento final/ De volta para o futuro ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3>De que frase é esse filme "Hasta la vista, baby!"?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="a" name="item5" value="a"> a) O exterminador do futuro
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="b" name="item5" value="b"> b) O exterminador do futuro 2 - o julgamento final
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="c" name="item5" value="c"> c) De volta para o futuro
                </div>
            </div>
            <input type="submit" class="botao fundo-6" value="Próxima" />
        </form>
    </body>
</html>