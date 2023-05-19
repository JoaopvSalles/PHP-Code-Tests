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

    <?php 
        $numero = $_GET["numero"] ?? 0;
        $raizQuadrada = (float) ($numero) ** (1/2);
        $raizCubica = (float) ($numero) ** (1/3);
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="">Número</label>
            <input type="number" name="numero" id="">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <p>Analisando o <strong>número <?=number_format($numero, 0, ',', '.')?></strong></p>
        <ul>
            <li>A sua raiz quadrada é <?=number_format($raizQuadrada, 3, ',', '.')?></li>
            <li>A sua raiz cúbica é <?=number_format($raizCubica, 3, ',', '.')?></li>
        </ul>
    </section>

</body>
</html>