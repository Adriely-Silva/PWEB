<?php

if (isset($_POST['nome'])) {
    $cookie_name = "nome";
    $cookie_value = $_POST['nome'];

    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header("Location: pergunta1.php");
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
        <form action="index.php" method="post">
            <div class="fundo-1">
                <div col-2>
                    <h2>Quizz</h2>
                </div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-12">
                        <h1>De que frase é esse filme?</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3>É um quiz para adivinhar de que frases é o filme. Serão 5 perguntas e no final vai apresentar uma tabela que mostrará as questões que acertou e errou e seu resultado. Espero que gostem!
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row"></div>
            <div class="row">
                <div class="col-12">
                    <h4>Nome: <input type="text" name="nome"></h4> 
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" class="botao fundo-1" value="Começar agora" />
                </div> 
            </div>
        </form>
    </body>
</html>