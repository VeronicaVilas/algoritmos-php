<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            <?php
                $minimo = 0;
                $maximo = 100;

                $numeroAleatorio = mt_rand($minimo, $maximo);
                echo "Gerando um valor aleatório entre $minimo e $maximo... <br>";
                echo "O valor gerado foi <strong>$numeroAleatorio</strong>";

                // rand() = Linear Congrential Generator - não é mais utilizada por gerar muito lentamente e à partir do PHP 7.1, é um simples apontamento para mt_rand()
                // mt_rand() = Hersenne Twister - é 4x mais rápido que o rand e mais confiável
                // random_int() = gera números aleatórios criptograficamente seguros, porém é o mais lento por precisar criptografar os números
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>