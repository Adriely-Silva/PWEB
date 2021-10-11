<?php

if (isset($_POST['item1'])) {
    $cookie_name = "item1";
    $cookie_value = $_POST['item1'];

    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header("Location: pergunta2.php");
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
        <form action="pergunta1.php" method="post">
            <div class="fundo-2">
                <div col-2>
                    <h2>Quizz</h2>
                </div>
                <div class="row">
                    <div class="col-12 central">
                        <img src="img/p1.png" alt="Star Wars/ Star Trek/ Toy Store">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3>De que frase é esse filme "Ao Infinito e além!"?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="a" name="item1" value="a"> a) Star Wars
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="b" name="item1" value="b"> b) Toy Store
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="radio" id="c" name="item1" value="c"> c) Star Trek
                </div>
            </div>
            <input type="submit" class="botao fundo-2" value="Próxima" />
        </form>
    </body>
</html>