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

        $numero = isset($_GET['numero']) ? $_GET['numero'] : 0;
        $numeroformatado = number_format($numero, 3, ",", ".");
        $inteiro = (int) $numero;
        $decimal = $numero - $inteiro;
        $decimal = number_format($decimal, 3, ",", ".");

        echo "
        <div class='container'>
            <p>Analisador de número real</p>
            <p>Numero digitado: </p>
            <p><b>$numeroformatado</b></p>
            <p>Parte inteira: </p>
            <p><b>$inteiro</b></p>
            <p>Parte decimal: </p>
            <p><b>$decimal</b></p>
            <a  href='index.php'>
                <button class='btn'>Voltar</button>
            </a>
        </div>
        ";

        ?>
    </div>
</body>

</html>