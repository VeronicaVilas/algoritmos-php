<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Antecessor e Sucessor</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $numero = $_GET["numero"];

                echo "O número escolhido foi <strong>$numero</strong><br>";
                echo "O seu antecessor é <em>" . ($numero - 1) . "</em><br>";
                echo "O seu sucessor é <em>" . ($numero + 1) . "</em><br>";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>
