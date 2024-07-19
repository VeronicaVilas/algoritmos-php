<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustar Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $preco = $_GET['preco'] ?? 0;
        $percentual = $_GET['percentual'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto(R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="percentual">Qual será o percentual de reajuste? (<strong><span id="porcentagem">?</span>%</strong>)</label>
            <input type="range" name="percentual" id="percentual" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$percentual?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php
        $aumento = ($preco * $percentual) / 100;
        $novoPreco = $preco + $aumento;
    ?>
    <section id="resultado">
        <h3>Resultado do Reajuste</h3>
        <p>O produto que custava R$ <?=number_format($preco, 2, ",", ".")?>, com <strong><?=$percentual?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($novoPreco, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>
    <script>
        mudaValor();
        function mudaValor() {
            porcentagem.innerText = percentual.value;
        }
    </script>
</body>
</html>