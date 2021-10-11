<?php

session_start();

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
                        if (!isset($_SESSION["nome"])) {
                            echo "N/A";
                        } else {
                            echo $_SESSION["nome"];
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
                                if (!isset($_SESSION["item1"])) {
                                    echo "N/A";
                                } else {
                                    echo $_SESSION["item1"];
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (!isset($_SESSION["item2"])) {
                                    echo "N/A";
                                } else {
                                    echo $_SESSION["item2"];
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (!isset($_SESSION["item3"])) {
                                    echo "N/A";
                                } else {
                                    echo $_SESSION["item3"];
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (!isset($_SESSION["item4"])) {
                                    echo "N/A";
                                } else {
                                    echo $_SESSION["item4"];
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (!isset($_SESSION["item5"])) {
                                    echo "N/A";
                                } else {
                                    echo $_SESSION["item5"];
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Acertou</td>
                        <td>
                            <?php
                                if (isset($_SESSION["item1"]) && $_SESSION["item1"] == "b") {
                                    echo "SIM";
                                } else {
                                    echo "NÃO";
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (isset($_SESSION["item2"]) && $_SESSION["item2"] == "c") {
                                    echo "SIM";
                                } else {
                                    echo "NÃO";
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (isset($_SESSION["item3"]) && $_SESSION["item3"] == "b") {
                                    echo "SIM";
                                } else {
                                    echo "NÃO";
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (isset($_SESSION["item4"]) && $_SESSION["item4"] == "a") {
                                    echo "SIM";
                                } else {
                                    echo "NÃO";
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if (isset($_SESSION["item5"]) && $_SESSION["item5"] == "b") {
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
                                if (isset($_SESSION["item1"]) && $_SESSION["item1"] == "b") {
                                    $nota++;
                                }
                                if (isset($_SESSION["item2"]) && $_SESSION["item2"] == "c") {
                                    $nota++;
                                }
                                if (isset($_SESSION["item3"]) && $_SESSION["item3"] == "b") {
                                    $nota++;
                                }
                                if (isset($_SESSION["item4"]) && $_SESSION["item4"] == "a") {
                                    $nota++;
                                }
                                if (isset($_SESSION["item5"]) && $_SESSION["item5"] == "b") {
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