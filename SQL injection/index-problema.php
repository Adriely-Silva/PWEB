
<?php
  //-----------------------------------------------------------------------------------------------------------
  // Situação de SQL INJECTION
  // A página simula simplificadamente um login de uma conta em um sistema de agenda online.

  // Apresentando um código problemático

  // Se colocar no campo de nome qualquer coisa e na senha -> ' or ''='
  // Conseguiremos burlar o login do sistema e qualquer pessoa poderia acessar
  //-----------------------------------------------------------------------------------------------------------

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $link = mysqli_connect("127.0.0.1", "root", "1234", "ag");
    $query = "SELECT * FROM conta WHERE Nome = '$nome' AND Senha = '$senha'";
    $result = mysqli_query($link, $query);
    $rows = mysqli_fetch_array($result);
    if ($rows) {
      echo "Logado com sucesso";
    }
    else {
      echo "Não logou. Tente novamente.";
    }
  }
?>

<html>
  <head>
    <title>Demonstrando Injection</title>
  </head>
  <body>
    <form action="index.php" method="POST">
    <h2>Demonstrando SQL Injection</h2><br>
    Nome:<br>
    <input type="text" name="nome"><br><br>
    Senha:<br>
    <input type="text" name="senha"><br><br>
    <input type="submit" value="Logar">
    </form>
  </body>
</html>