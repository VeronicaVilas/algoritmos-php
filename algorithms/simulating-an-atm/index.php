<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulando um caixa eletrônico</title>
    <link rel="stylesheet" href="../../styles/style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php
        $saque = $_GET['saque'] ?? 0;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style="font-size:0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$20, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php
        $resto = $saque;
        $nota100 = floor($resto / 100);

        $resto %= 100;
        $nota50 = floor($resto / 50);

        $resto %= 50;
        $nota20 = floor($resto / 20);

        $resto %= 20;
        $nota10 = floor($resto / 10);

        $resto %= 10;
        $nota5 = floor($resto / 5);
    ?>
    <section id="resultado">
        <h3>Saque de R$ <?=numfmt_format_currency($padrao, $saque, "BRL")?> realizado</h3>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x <?=$nota100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x <?=$nota50?></li>
            <li><img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota"> x <?=$nota20?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x <?=$nota10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 50" class="nota"> x <?=$nota5?></li>
        </ul>
    </section>
</body>
</html>