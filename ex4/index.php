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
          <h2>Exercício 4</h2>
          <p>Converta reais em dólares - cotação fixa. O valor de conversão é fixo de <b>R$ 5,46</b> </p>
          <input type="number" name="numeroquatro" placeholder="Digite seu número" step="0.01" min="0" required>
          <input type="submit" value="Enviar" class="btn">
        </form>
        <?php
        $numero = $_GET['numeroquatro'] ?? 0;
        $cotacao = 5.46;
        $resultado = $numero / $cotacao;
        $resultado = number_format($resultado, 2, ",", ".");
        echo "
          <div class='box'>
              <p>O valor da conversão de <b>BRL</b> <b> R$ " . number_format($numero, 2, ",", ".") . 
              "</b> para <b>USD</b> é: <b>$ $resultado</b></p>
          </div>
        ";
        ?>
      </div>

    </div>

  </main>

</body>

</html>