<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Real para Dólar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Conversor de Real para Dólar</h1>
    <div>
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
        <button onclick="window.history.back()">Converter outro valor</button>
        <button onclick="window.location.href='dashboard.php'">Voltar para a página inicial</button>
    </div>
</body>
</html>