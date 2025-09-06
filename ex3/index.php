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
          <h2>Exercício 3</h2>
          <p>Botão para gerar números aleatórios entre 0 e 100</p>
          <input type="submit" value="Enviar" class="btn" />
        </form>
        <?php
        $numero = mt_rand(1, 100);
        echo "<div class='box'>
              <p>Um número entre 1 e 100 foi sorteado: <b>$numero</b></p>
          </div>";
        ?>
      </div>
    </div>
  </main>
</body>

</html>