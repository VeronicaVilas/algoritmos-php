<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>
<body>
    <?php
        $tempoInformado = $_GET['tempoInformado'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="tempoInformado">Qual é o total de segundos?</label>
            <input type="number" name="tempoInformado" id="tempoInformado" value="<?=$tempoInformado?>" min="0" step="1" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php
        $sobra = $tempoInformado;
        $semana =  intdiv($sobra, 604_800);
        
        $sobra = $sobra % 604_800;
        $dia = (int) ($sobra / 86_400);

        $sobra = $sobra % 86_400;
        $hora = (int) ($sobra / 3_600);

        $sobra = $sobra % 3_600;
        $minuto = (int) ($sobra / 60);

        $sobra = $sobra % 60;
        $segundo = $sobra;
    ?>
    <section>
        <h3>Totalizando tudo</h3>
        <p>Analisando o valor que você digitou, <strong><?=number_format($tempoInformado, 0, ",", ".")?> segundos</strong> equivalem a um total de :</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>
</body>
</html>