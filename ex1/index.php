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
        <?php
        $numeroum = $_GET['numeroum'] ?? 0;
        $numerodois = $_GET['numerodois'] ?? 0;
        $resultado = $numeroum + $numerodois;
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
          <h2>Exercício 1</h2>
          <p>Receba 2 números e exiba a soma entre eles</p>
          <input
            type="number"
            name="numeroum"
            placeholder="Digite um número"
            value="<?= $numeroum ?>"
            required />
          <input
            type="number"
            name="numerodois"
            placeholder="Digite outro número"
            value="<?= $numerodois ?>"
            required />
          <input type="submit" value="Enviar" class="btn" />
        </form>
        <div class="box">
          <p>
            Primeiro número: <b><?= $numeroum ?></b>
          </p>
          +
          <p>
            Segundo número: <b><?= $numerodois ?></b>
          </p>
          <p>
            Resultado: <b><?= $resultado ?></b>
          </p>
        </div>
      </div>
    </div>
  </main>
</body>

</html>