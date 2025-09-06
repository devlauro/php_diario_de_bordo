<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exercícios PHP</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
    <header>
    <?php

    $menu = "
        <ul>
            <li><a href='../ex1/index.php' class='btn'>Exercício 1</a></li>
            <li><a href='../ex2/index.php' class='btn'>Exercício 2</a></li>
            <li><a href='../ex3/index.php' class='btn'>Exercício 3</a></li>
            <li><a href='../ex4/index.php' class='btn'>Exercício 4</a></li>
            <li><a href='../ex5/index.php' class='btn'>Exercício 5</a></li>
            <li><a href='../ex6/index.php' class='btn'>Exercício 6</a></li>
        </ul>
        ";
        echo "$menu";


    ?>
  </header>
  <main>
    <div class="container">


      <div class="wrapper">

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
          <h2>Exercício 6</h2>
          <p>Faça um programa converta reais em dólares - usando api externa</p>
          <input type="number" name="numero6" placeholder="Digite seu número" step="0.001" min="0" required>
          <input type="submit" value="Enviar" class="btn">
        </form>

        <?php
        $numero = $_GET['numero6'] ?? 0;
        $url = 'https://bcb.dadosabertosbr.com/api/v2/cotacao-moeda?moeda=USD';
        $json = file_get_contents($url);
        $dados = json_decode($json);

        $cotacao = $dados->USD->bid;
        $resultado = $numero / $cotacao;
        $resultado = number_format($resultado, 2, ",", ".");

        echo "$resultado, $cotacao";

        echo "
          <div class='box'>
              <p>O valor em dólares de <b>" . number_format($numero, 2, ",", ".") . "</b> reais é: </p>
              <p><b>R$ $resultado</b></p>
              <p>O valor de conversão é fixo de <b>R$ $cotacao</b> </p>
          </div>
        ";
        ?>

      </div>
    </div>

  </main>

</body>

</html>