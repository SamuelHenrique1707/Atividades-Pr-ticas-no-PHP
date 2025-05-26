<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Consumo de Combustível</title>
</head>
<body>
    <h1>Calculadora de Consumo de Combustível</h1>
    <form method="post">
        <label>Distância percorrida (km):</label>
        <input type= "number" step="0.01" name="distância" required><br><br>

        <label>Combustível gasto (litros):</label>
        <input type="number" step="0.01" name="combustível" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $distancia = $_POST["distancia"];
        $combustivel = $_POST["combustivel"];

        if ($combustivel > 0) {
            $consumo = $distancia / $combustivel;
            echo "<h2>Consumo médio:" . round($consumo, 2) . " km/l</h2>";
        } else {
            echo "<p style='color:red;'>0 valor do combustível deve ser maior que zero.;</p>"
        }
    }
    ?>
    </body>
