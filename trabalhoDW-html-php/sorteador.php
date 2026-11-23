<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sorteador.css">
</head>
<body>
    <main class="pagina pagina-sorteador">
        <h1>Sorteador de números</h1>
        <?php
            $min = 0;
            $max = 100;
            $number = mt_rand($min, $max);
        ?>
        <section class="cartao resultado">
            <h2>Número sorteado</h2>
            <output class="numero-sorteado"><?= $number ?></output>
            <p>Intervalo de <?= $min ?> a <?= $max ?>.</p>
        </section>
        <div class="acoes">
            <button class="botao" type="button" onclick="location.reload()">Sortear outro número</button>
            <a class="botao botao-secundario" href="dashboard.php">Voltar ao painel</a>
        </div>
    </main>
</body>
</html>
