<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linear Search</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>
<body>
    <?php
        $key = $_GET['key'] ?? 0;
    ?>
    <main>
        <h1>Linear Search</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="key">Qual o algoritmo que deseja buscar?</label>
            <input type="number" name="key" id="key" min="0" value="<?=$key?>" required>
            <input type="submit" value="Buscar">
        </form>
    </main>
    <section id="resultado">
        <h3>Resultado:</h3>
        <?php
            $array = array(10, 50, 30, 70, 80, 20, 90, 40);

            function search($array, $element, $key) {
                for($index = 0; $index < $element; $index++) {
                    if($array[$index] == $key)
                        return $index;
                }

                return "notFound";
            }

            $result = search($array, sizeof($array), $key);
            if($result != "notFound")
                echo "<p>O elemento <strong>$key</strong> foi encontrado no array, e representa o índice $result.</p>";
            else
                echo "<p>O elemento <strong>$key</strong> não foi encontrado no array, tente novamente!</p>";
        ?>
    </section>
</body>
</html>