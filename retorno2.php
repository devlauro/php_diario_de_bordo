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
            $sucessor = $numero + 1;
            $antecessor = $numero - 1;

            echo "
            <div class='container'>
                <p>O número escolhido foi: </p>
                <p><b>$numero</b> </p>
                <p>O sucessor de <b>$numero</b>  é: </p>
                <p><b>$sucessor</b></p>
                <p>O antecessor de <b>$numero</b> é: </p>
                <p><b>$antecessor</b></p>
                <a  href='index.php'>
                    <button class='btn'>Voltar</button>
                </a>
            </div>
            ";

            ?>
        </div>
    </body>

    </html>