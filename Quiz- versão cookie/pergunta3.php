<?php

if (isset($_POST['item3'])) {
    $cookie_name = "item3";
    $cookie_value = $_POST['item3'];

    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header("Location: pergunta4.php");
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
        <form action="pergunta3.php" method="post">
            <div class="fundo-4">
                <div col-2>
                    <h2>Quizz</h2>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-12 central">
                        <img src="img/p3.png" alt="It/ O Iluminado/ Doutor Sono">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3>De que frase é esse filme "Here's Johnny"?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="a" name="item3" value="a"> a) It
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="b" name="item3" value="b"> b) O Iluminado
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="c" name="item3" value="c"> c) Doutor Sono
                </div>
            </div>
            <input type="submit" class="botao fundo-4" value="Próxima" />
        </form>
    </body>
</html>