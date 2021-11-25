
<?php
  //-----------------------------------------------------------------------------------------------------------
  // Situação de solução SQL INJECTION
  // A página simula simplificadamente um login de uma conta em um sistema de agenda online.

  // Apresentando um código com a solução para o problema

  // 
  //-----------------------------------------------------------------------------------------------------------

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ag', 'root', '1234');
    $stmt = $pdo->prepare('SELECT * FROM conta WHERE Nome = :nome AND Senha = :senha');
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':senha', $senha);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <title>Demonstrando Solução de Injection</title>
  </head>
  <body>
    <form action="index.php" method="POST">
    <h2>Demonstrando Solução de SQL Injection</h2><br>
    Nome:<br>
    <input type="text" name="nome"><br><br>
    Senha:<br>
    <input type="text" name="senha"><br><br>
    <input type="submit" value="Logar">
    </form>
  </body>
</html>
<?php