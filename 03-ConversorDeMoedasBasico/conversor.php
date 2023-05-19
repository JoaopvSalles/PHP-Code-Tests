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
        <h1>Conversor de Moedas</h1>
        <?php 
            $real = $_GET["real"];
            $dolar = $real / 5.22;
        //    echo "Seus R$" . number_format($real, 2, ",", ".") . " equivalem a US$" . number_format($dolar, 2, ",", ".");

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus <strong>" . numfmt_format_currency($padrao, $real, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>";
        ?>
        <p>
            <input onclick="javascript:history.go(-1)" type="button" value="Voltar">
        </p>
    </main>
    
</body>
</html>