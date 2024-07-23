<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Conversor de Moedas Básico V1</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <p>
            <?php 
                $valor = $_GET["valor"] ?? 0;
                $cotacao = 5.43;
                $conversao = $valor / $cotacao;

                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong> " . numfmt_format_currency($padrao, $conversao, "USD") . "</strong><br>";
                echo "<br><span style='font-size: smaller;'><strong>*Cotação fixa de " . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong> informada diretamente no código"

                // outra forma de formatação: ($valor, 2, ',', '.')
            ?>
        </p>
        <button onclick="javascript: history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>