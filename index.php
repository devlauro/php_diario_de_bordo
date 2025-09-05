<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exercícios PHP</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
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


      <div class="wrapper">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
          <h2>Exercício 2</h2>
          <p>Receba um número e exiba o sucessor e o antecessor dele</p>
          <input type="number" name="numerotres" placeholder="Digite seu número" required />
          <input type="submit" value="Enviar" class="btn" />
        </form>
        <?php
        $numero = $_GET['numerotres'] ?? 0;
        $sucessor = $numero + 1;
        $antecessor = $numero - 1;
        echo "
          <div>
              <p>Seu número: <b>$numero</b></p>
              <p>Sucessor: <b>$sucessor</b></p>
              <p>Antecessor: <b>$antecessor</b></p>
          </div>
        ";
        ?>
      </div>


      <div class="wrapper">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
          <h2>Exercício 3</h2>
          <p>Botão para gerar números aleatórios entre 0 e 100</p>
          <input type="submit" value="Enviar" class="btn" />
        </form>
        <?php
        $numero = mt_rand(1, 100);
        echo "
          <div>
              <p>Um número entre 1 e 100 foi sorteado: <b>$numero</b></p>
          </div>
        ";
        ?>
      </div>


      <div class="wrapper">

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
          <h2>Exercício 4</h2>
          <p>Converta reais em dólares - cotação fixa</p>
          <input type="number" name="numeroquatro" placeholder="Digite seu número" step="0.01" min="0" required>
          <input type="submit" value="Enviar" class="btn">
        </form>
        <?php
        $cotacao = 5.46;
        $numero = $_GET['numeroquatro'] ?? 0;
        $resultado = $numero / $cotacao;
        $resultado = number_format($resultado, 2, ",", ".");

        echo "
          <div>
              <p>O valor em dólares de <b>" . number_format($numero, 2, ",", ".") . "</b> reais é: </p>
              <p><b>R$ $resultado</b></p>
              <p>O valor de conversão é fixo de <b>R$ 5,46</b> </p>
          </div>
        ";
        ?>
      </div>


      <div class="wrapper">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
          <h2>Exercício 5</h2>
          <p>Faça um programa que analise um número real com float e separe a parte inteira e a parte decimal</p>
          <input type="number" name="numerocinco" placeholder="Digite seu número" step="0.001" min="0"  required>
          <input type="submit" value="Enviar" class="btn">
        </form>
        <?php
        $numero = $_GET['numerocinco'] ?? 0;
        $parteInteira = (int) $numero;
        $parteDecimal = $numero - $parteInteira;
        echo "
          <div>
              <p>Seu número: <b>$numero</b></p>
              <p>Parte inteira: <b>$parteInteira</b></p>
              <p>Parte decimal: <b>$parteDecimal</b></p>
          </div>
        ";
        ?>

      </div>

      <div class="wrapper">

        <form action="retorno6.php" method="get">
          <h2>Exercício 6</h2>
          <p>Faça um programa converta reais em dólares - usando api externa</p>
          <input type="number" name="numero" placeholder="Digite seu número" step="0.001" min="0" required>
          <input type="submit" value="Enviar" class="btn">
        </form>
      </div>
    </div>

  </main>

</body>

</html>