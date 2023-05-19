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
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero = $_GET["valor"];

            echo "Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong>  informado";

            $inteiro = (int) $numero;
            $fracionado = $numero - $inteiro;

            echo "<ul><li> A parte inteira do número é " . number_format($inteiro, 0, ",", ".") . "</li>";
            echo "<li> A parte fracionária do número é " . number_format($fracionado, 3, ",", ".") . "</ul></li>"
        ?>
        <input onclick="javascript:history.go(-1)" type="button" value="Voltar">
    </main>
</body>
</html>