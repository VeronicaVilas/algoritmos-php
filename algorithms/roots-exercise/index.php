<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício das Raizes</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>
<body>
    <?php
        $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h3>Resultado final</h3>
        <?php
            $raizQuadrada = sqrt($numero);
            $raizCubica = pow($numero, 1/3); // ou $raizCubica = $numero ** (1/3)

            echo "<p>Analisando o <strong>número $numero,</strong> temos:</p>";
            echo "<ul>";
            echo "<li>A sua raíz quadrada é <strong>" . number_format($raizQuadrada, 3, ",", ".") . "</strong></li>";
            echo "<li>A sua raíz cúbica é <strong>" . number_format($raizCubica, 3, ",", ".") . "</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>