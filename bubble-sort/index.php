<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Sort</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $array = isset($_GET['array']) ? explode(',', $_GET['array']) : [];
    ?>
    <main>
        <h1>Bubble Sort</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="array">Informe um conjunto de números:<span style="font-size:0.7em;">(separados por vírgula)</span></label>
            <input type="text" name="array" id="array" value="<?=implode(',', $array)?>" required>
            <input type="submit" value="Ordenar">
        </form>   
    </main>
    <?php
        function bubbleSort(&$array) {
            $length = count($array);

            for ($pass = 0; $pass < $length - 1; $pass++) {
                $wasSwapped = false;
                for ($index = 0; $index < $length - $pass - 1; $index++) {
                    if ($array[$index] > $array[$index + 1]) {
                        $temp = $array[$index];
                        $array[$index] = $array[$index + 1];
                        $array[$index + 1] = $temp;
                        $wasSwapped = true;
                    }
                }

                if(!$wasSwapped) {
                    break;
                }
            }
        }
    ?>
    <section id="resultado">
        <h3>Resultado</h3>
        <?php
            if (!empty($array)) {
                $array = array_map('intval', $array);
                echo "<p>Ao ordenar o array informado " . implode(',', $array) . " de forma crescente, tem como resultado a seguinte ordenação:</p>";
                bubbleSort($array);
                echo "<p style='text-align:center;'><strong>" . implode(',', $array) . "</strong></p>";
            }
        ?>
    </section>
</body>
</html>
