<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libras para Quilos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conversorPeso.css">
</head>
<body>
    <main class="pagina pagina-peso">
        <h1>Conversor de libras para quilos</h1>
        <form class="cartao" method="POST">
            <div class="campo">
                <label for="libras">Libras (lb)</label>
                <input type="number" id="libras" name="libras" step="any" required>
            </div>
            <button class="botao" type="submit">Converter</button>
        </form>

        <?php if (isset($_POST['libras'])): ?>
            <?php
                $libras = $_POST['libras'];
                $quilos = $libras * 0.453592;
            ?>
            <section class="cartao resultado">
                <h2>Resultado da conversão</h2>
                <p><?= $libras ?> lb = <strong><?= round($quilos, 2) ?> kg</strong></p>
            </section>
        <?php endif; ?>

        <div class="acoes">
            <a class="botao botao-secundario" href="dashboard.php">Voltar ao painel</a>
        </div>
    </main>
</body>
</html>
