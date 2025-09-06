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
          <h2>Exercício 5</h2>
          <p>Analise um número real com float, separando a parte inteira e a parte decimal</p>
          <input type="number" name="numerocinco" placeholder="Digite seu número" step="0.001" min="0" required>
          <input type="submit" value="Enviar" class="btn">
        </form>
        <?php
        $numero = $_GET['numerocinco'] ?? 0;
        $parteInteira = (int) $numero;
        $parteDecimal = $numero - $parteInteira;
        echo "
          <div class='box'>
              <p>Seu número: <b>$numero</b></p>
              <p>Parte inteira: <b>$parteInteira</b></p>
              <p>Parte decimal: <b>$parteDecimal</b></p>
          </div>
        ";
        ?>

      </div>

    </div>

  </main>

</body>

</html>