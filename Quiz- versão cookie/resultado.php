<?php

/*
if (!isset($_COOKIE["nome"])) {
  echo "Cookie named '" . "nome" . "' is not set!";
} else if (!isset($_COOKIE["item1"])) {
    echo "Cookie named '" . "item1" . "' is not set!";
} else if (!isset($_COOKIE["item2"])) {
    echo "Cookie named '" . "item2" . "' is not set!";
} else if (!isset($_COOKIE["item3"])) {
    echo "Cookie named '" . "item3" . "' is not set!";
} else if (!isset($_COOKIE["item4"])) {
    echo "Cookie named '" . "item4" . "' is not set!";
} else if (!isset($_COOKIE["item5"])) {
    echo "Cookie named '" . "item5" . "' is not set!";
} else {
  echo "Cookie '" . "nome" . "' is set!<br>";
  echo "Value is: " . $_COOKIE["nome"] . "<br>";
  echo "Cookie '" . "item1" . "' is set!<br>";
  echo "Value is: " . $_COOKIE["item1"] . "<br>";
  echo "Cookie '" . "item2" . "' is set!<br>";
  echo "Value is: " . $_COOKIE["item2"] . "<br>";
  echo "Cookie '" . "item3" . "' is set!<br>";
  echo "Value is: " . $_COOKIE["item3"] . "<br>";
  echo "Cookie '" . "item4" . "' is set!<br>";
  echo "Value is: " . $_COOKIE["item4"] . "<br>";
  echo "Cookie '" . "item5" . "' is set!<br>";
  echo "Value is: " . $_COOKIE["item5"] . "<br>";
}
*/

?>
<html>
    <head>
        <title>Quiz de frases de filmes</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    </head>
    <body>
        <div class="fundo-7">
            <div class="row">
                <div col-2>
                    <h2>Quizz</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 nome">
                    <?php
                        if (!isset($_COOKIE["nome"])) {
                            echo "N/A";
                        } else {
                            echo $_COOKIE["nome"];
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table>
                    <tr>
                        <th></th>
                        <th>Pergunta 1</th>
                        <th>Pergunta 2</th>
                        <th>Pergunta 3</th>
                        <th>Pergunta 4</th>
                        <th>Pergunta 5</th>
                    </tr>
                    <tr>
                        <td>Gabarito</td>
                        <td>b</td>
                        <td>c</td>
                        <td>b</td>
                        <td>a</td>
                        <td>b</td>
                    </tr>
                    <tr>
                        <td>Respostas do usuário</td>
                        <td>
                            <?php
                                if (!isset($_COOKIE["item1"])) {
                                    echo "N/A";
                                } else {
                                    echo $_COOKIE["item1"];
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (!isset($_COOKIE["item2"])) {
                                    echo "N/A";
                                } else {
                                    echo $_COOKIE["item2"];
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (!isset($_COOKIE["item3"])) {
                                    echo "N/A";
                                } else {
                                    echo $_COOKIE["item3"];
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (!isset($_COOKIE["item4"])) {
                                    echo "N/A";
                                } else {
                                    echo $_COOKIE["item4"];
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (!isset($_COOKIE["item5"])) {
                                    echo "N/A";
                                } else {
                                    echo $_COOKIE["item5"];
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Acertou</td>
                        <td>
                            <?php
                                if (isset($_COOKIE["item1"]) && $_COOKIE["item1"] == "b") {
                                    echo "SIM";
                                } else {
                                    echo "NÃO";
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (isset($_COOKIE["item2"]) && $_COOKIE["item2"] == "c") {
                                    echo "SIM";
                                } else {
                                    echo "NÃO";
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (isset($_COOKIE["item3"]) && $_COOKIE["item3"] == "b") {
                                    echo "SIM";
                                } else {
                                    echo "NÃO";
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (isset($_COOKIE["item4"]) && $_COOKIE["item4"] == "a") {
                                    echo "SIM";
                                } else {
                                    echo "NÃO";
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (isset($_COOKIE["item5"]) && $_COOKIE["item5"] == "b") {
                                    echo "SIM";
                                } else {
                                    echo "NÃO";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nota</td>
                        <td>
                            <?php
                                $nota = 0;
                                if (isset($_COOKIE["item1"]) && $_COOKIE["item1"] == "b") {
                                    $nota++;
                                }
                                if (isset($_COOKIE["item2"]) && $_COOKIE["item2"] == "c") {
                                    $nota++;
                                }
                                if (isset($_COOKIE["item3"]) && $_COOKIE["item3"] == "b") {
                                    $nota++;
                                }
                                if (isset($_COOKIE["item4"]) && $_COOKIE["item4"] == "a") {
                                    $nota++;
                                }
                                if (isset($_COOKIE["item5"]) && $_COOKIE["item5"] == "b") {
                                    $nota++;
                                }
                                echo $nota;
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>