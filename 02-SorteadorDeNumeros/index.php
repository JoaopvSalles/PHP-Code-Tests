<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Gerador de números aleatórios</h1>
        <?php
            $min = 0;
            $max = 100;
            $numero = rand($min, $max);
            echo "Gerando um numero aleatório entre $min e $max...</br>";
            echo "O valor gerado foi $numero.<br><br>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>