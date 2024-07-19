<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo com PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $salarioMinimo = 1412; // sem a formatação pode se por exemplo: 1_380.60
        $salario = $_GET['salario'] ?? $salarioMinimo;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <p style='font-size: smaller'>Considerando o salário mínimo de <strong><?=numfmt_format_currency($padrao, $salarioMinimo, "BRL")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h3>Resultado Final</h3>
        <?php
            $total = intdiv($salario, $salarioMinimo);
            $diferenca = $salario % $salarioMinimo;

            echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>$total salário(s) mínimo(s)</strong> + " . numfmt_format_currency($padrao, $diferenca, "BRL") . ".</p>"
        ?>
    </section>
</body>
</html>