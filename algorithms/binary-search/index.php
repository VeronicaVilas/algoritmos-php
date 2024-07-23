<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary Search</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>
<body>
    <?php
        $array = isset($_GET['array']) ? explode(',', $_GET['array']) : [];
        $destiny = isset($_GET['destiny']) ? (int) $_GET['destiny'] : 0;
    ?>
    <main>
        <h1>Binary Search</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="array">Informe um conjunto de números:<span style="font-size: 0.7em;">(separados por vírgula)</span></label>
            <input type="text" name="array" id="array" value="<?=implode(',', $array)?>" required>
            <label for="destiny">Qual número deseja encontrar?</label>
            <input type="number" name="destiny" id="destiny" value="<?=$destiny?>"required>
            <input type="submit" value="Buscar">
        </form>
    </main>
    <?php
        function binary_search($array, $destiny) {
            $start =0;
            $end = count($array) -1;

            while ($start <= $end) {
                $middle = intdiv($start + $end, 2);

                if ($array[$middle] == $destiny) {
                    return $middle;
                } elseif ($array[$middle] < $destiny) {
                    $start = $middle + 1;
                } else {
                    $end = $middle -1;
                }
            }

            return "notFound";
        }
        
        $index = binary_search($array, $destiny);
    ?>
    <section id = "resultado">
        <h3>Resultado</h3>
        <?php if ($index != "notFound"): ?>
            <p>O elemento <strong><?=$destiny?></strong> está no <strong>índice <?=$index?></strong>. Pois em um array, a contagem começa á partir de 0.</p>
        <?php else: ?>
            <p>O elemento <?=$destiny?> não foi encontrado na matriz.</p>
        <?php endif; ?>
    </section>
</body>
</html>