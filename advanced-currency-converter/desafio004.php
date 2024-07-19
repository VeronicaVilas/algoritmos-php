<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Conversor de Moedas Avançado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <p>
            <?php 
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
                $dados = json_decode(file_get_contents($url), true);
            
                $valor = $_GET["valor"] ?? 0;
                $cotacao = $dados["value"][0]["cotacaoCompra"];
                $conversao = $valor / $cotacao;

                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong> " . numfmt_format_currency($padrao, $conversao, "USD") . "</strong><br>";
                echo "<br><span style='font-size: smaller;'>*Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong>"
            ?>
        </p>
        <button onclick="javascript: history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>