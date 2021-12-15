<?php 

    $pdo = new PDO('mysql:host=sql202.epizy.com;dbname=epiz_30578736_blog', 'epiz_30578736', 'YKXzIhQ86RR');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $comentario = $_POST['comentario'];

        try {
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare('INSERT INTO comentario(nome, texto) VALUES(:nome, :comentario)');
            $stmt->execute(array(
                ':nome' => $nome,
                ':comentario' => $comentario
            ));
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    $stmt = $pdo->prepare('SELECT * FROM comentario');
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $lista = "";
    foreach ($rows as &$value) {
        $lista .=  "<dt>" . $value['nome'] . "</dt><dd> - " . $value['texto'] . "</dd>";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo/estilo.css" media="screen" />
        <title>Se liga hein</title>
    </head>
    <body>
        <header class="bloco">
            <h1>Se liga hein</h1>
            <img src="planeta_terra.jpg" alt="planeta terra" class="col-12" >
        </header>
        <article class="col-10">
            <h2>Impactos atuais das mudaças climáticas no Nordeste</h2>
            <p>A Região Nordeste é uma das mais vulneráveis às mudanças climáticas. Abaixo trouxemos alguns dos impactos que essa região já está sofrendo e poderá sofrer:</p>
            <h4>Desertificação no Semiárido</h4>
            <p>As mudanças climáticas e a destruição da Caatinga fizeram com que 13% do Semiárido se desertificasse, ou seja, se tornasse infértil.</p>
            <p>Segundo Humberto Barbosa, meteorologista e cientista do solo, também professor da Universidade Federal de Alagoas (Ufal), temperaturas extremas prejudicam a sobrevivência de micro-organismos que vivem no solo e são cruciais para a existência de plantas. Em 2019, Barbosa encontrou temperaturas de até 48°C em solos degradados no interior de Alagoas.</p>
            <p> Os Estados mais impactados pela desertificação são Alagoas (com 32,8% de sua área total afetada pelo fenômeno), Paraíba (27,7%), Rio Grande do Norte (27,6%), Pernambuco (20,8%), Bahia (16,3%), Sergipe (14,8%), Ceará (5,3%), Minas Gerais (2%) e Piauí (1,8%).</p>
            <h4>Aumento de temperatura</h4>
            <p>Um estudo realizado pelo Inpe (Instituto Nacional de Pesquisas Espaciais), juntamente com o Laboratório de Meteorologia de Pernambuco, apontou que as temperaturas médias das cidades do Nordeste fora do litoral estão aumentando de forma rápida.</p>
            <p>Em 40 anos, por exemplo, cidades como Vitória de Santo Antão, na zona da mata pernambucana, registrou um aumento de 3,5°C (31,5ºC para 35ºC) na temperatura máxima diária. Enquanto isso, o estudo mostra que o aumento médio da temperatura mundial, no mesmo período, foi de 0,4°C.</p>
            <h4>Aumento do nível do mar</h4>
            <p>Segundo uma pesquisa realizada por cientistas europeus, 82% da retração de praias ocorrerá como resultado direto da subida do nível do mar. O restante se deverá a alterações ambientais locais.</p>
            <p>No cenário moderado, a linha de praia recua em 1 m a 78 m nos cinco continentes até o meio do século, e em 15 m a 164 m no fim do século. No pior cenário, o recuo chega a 240 m no fim do século, o que implicaria em perda de 35,7% a 49,5% das praias de areia do planeta.</p>
            <p>No Nordeste do Brasil o recuo seria de mais de 150 metros no pior cenário, no fim do século. Mas já em 2050 as praias nordestinas podem perder 40 metros de faixa de areia, em média, mesmo num cenário de emissões moderadas.</p>
        </article>
        <article class="col-12">
            <h3>Formulário</h3>
            <p>Você é do Ceará? Nos ajude respondendo esta:</p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfJNAZ3IJliz8EUBkYwWmifP8TLRtiBUkw792XUMIcsTCYBmw/viewform">Pesquisa de consciência social a respeito das mudanças climáticas no estado do Ceará</a>
            <p class="fundo">“Quando a última árvore tiver caído, quando o último rio tiver sido poluído, quando o último peixe for pescado, vocês vão entender que dinheiro não se come.”</p>
        </article>
        <article class="col-12">
            <h3>Comentário</h3>
            <form action="index.php" method="POST">
                <p>Nome: <input type="text" name="nome"></p> 
                <p>Deixe o comentário aqui:<p>
                <textarea cols="20" rows="2" name="comentario"></textarea><br>
                <input type="submit">
            </form>
        </article>
        <article class="col-12">
            <h3>Lista dos comentários</h3>
            <dl class="borda-branca"><?php echo $lista; ?></dl>
        </article>
    </body>
</html>