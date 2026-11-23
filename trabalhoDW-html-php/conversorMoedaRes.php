<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Real para Dólar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conversorMoedaRes.css">
</head>
<body>
    <main class="pagina pagina-cotacao">
        <h1>Conversor de real para dólar</h1>
        <section class="cartao resultado">
            <h2>Resultado da conversão</h2>
            <?php
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $dados = json_decode(file_get_contents($url), true);

                $cotacao = $dados['value'][0]['cotacaoCompra'];

                $real = $_POST['dinheiro'] ?? 0;
                $dolar = $real / $cotacao;

                $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

                echo "<p>Os seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong> " . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            ?>
        </section>
        <div class="acoes">
            <button class="botao" type="button" onclick="window.history.back()">Converter outro valor</button>
            <a class="botao botao-secundario" href="dashboard.php">Voltar ao painel</a>
        </div>
    </main>
</body>
</html>
