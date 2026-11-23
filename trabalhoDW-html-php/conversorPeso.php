<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Libras para Quilos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Conversor de Libras (lbs) para Quilos (kgs)</h1>
    <form method="POST">
        <label>Libras (lbs):</label>
        <input type="number" name="libras" step="any" required>
        <button type="submit">Converter</button>

        <?php
        if (isset($_POST['libras'])) {
            $libras = $_POST['libras'];
            $quilos = $libras * 0.453592;
            echo "<h2>O resultado da conversão é:</h2>";
            echo "<h3>$libras lbs = " . round($quilos, 2) . " kg</h3><br>";
        }
        ?>
        <button onclick="window.location.href='dashboard.php'">Voltar para a página inicial</button>
    </form>

</body>

</html>