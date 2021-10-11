<?php

if (isset($_POST['item4'])) {
    $cookie_name = "item4";
    $cookie_value = $_POST['item4'];

    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header("Location: pergunta5.php");
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
        <form action="pergunta4.php" method="post">
            <div class="fundo-5">
                <div col-2>
                    <h2>Quizz</h2>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-12 central">
                        <img src="img/p4.png" alt="Sexto Sentido/ Madrugada dos mortos/ A noite dos morto-vivos">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3>De que frase é esse filme "Eu vejo gente morta"?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="a" name="item4" value="a"> a) Sexto Sentido
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="b" name="item4" value="b"> b) Madrugada dos mortos
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="c" name="item4" value="c"> c) A noite dos morto-vivos
                </div>
            </div>
            <input type="submit" class="botao fundo-5" value="Próxima" />
        </form>
    </body>
</html>