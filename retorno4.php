<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <?php
        $cotacao = 5.46;

        $numero = isset($_GET['numero']) ? $_GET['numero'] : 0;
        $resultado = $numero / $cotacao;
        $resultado = number_format($resultado, 2, ",", ".");

        echo "
        <div class='container'>
            <p>O valor em dólares de <b>" . number_format($numero, 2, ",", ".") . "</b> reais é: </p>
            <p><b>R$ $resultado</b></p>
            <p>O valor de conversão é fixo de <b>R$ 5,46</b> </p>
            <a  href='index.php'>
                <button class='btn'>Voltar</button>
            </a>
        </div>
        ";

        ?>
    </div>
</body>

</html>