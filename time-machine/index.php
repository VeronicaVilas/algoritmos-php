<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máquina do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $anoNascimento = $_GET['anoNascimento'] ?? '';
        $anoAtual = date("Y");
        $ano = $_GET['ano'] ?? $anoAtual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNascimento" id="anoNascimento" max="<?=$anoAtual?>" required>
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?=$anoAtual?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h3>Resultado</h3>
        <?php
            $idade = $ano - $anoNascimento;
        ?>
        <p>Quem nasceu em <?=$anoNascimento?> vai ter <strong><?=$idade?> ano(s)</strong> em <?=$ano?>!</p>
    </section>
</body>
</html>