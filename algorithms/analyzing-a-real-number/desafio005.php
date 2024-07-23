<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Analisando um número real</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <p>
            <?php
                $numero = $_POST["numero"] ?? 0;

                echo "Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário:<br>";

                $inteira = (int) $numero;
                $fracionaria = $numero - $inteira;

                echo "<ul><li> A parte inteira do número é <strong>" . number_format($inteira, 0, ",", ".") . "</strong></li>";
                echo "<li>A parte fracionária do número é <strong>" . number_format($fracionaria, 3, ",", ".") . "</strong></li></ul>"
            ?>
        </p>
        <button onclick="javascript: history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>