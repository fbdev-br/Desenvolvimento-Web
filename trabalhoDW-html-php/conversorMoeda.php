<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Real para Dólar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conversorMoeda.css">
</head>
<body>
    <main class="pagina pagina-moeda">
        <h1>Conversor de real para dólar</h1>
        <form class="cartao" action="conversorMoedaRes.php" method="post">
            <div class="campo">
                <label for="idinheiro">Valor em reais (R$)</label>
                <input type="number" id="idinheiro" name="dinheiro" step="0.01" required>
            </div>
            <button class="botao" type="submit">Converter</button>
        </form>
        <div class="acoes">
            <button class="botao botao-secundario" type="button" onclick="window.history.back()">Voltar</button>
        </div>
    </main>
</body>
</html>
