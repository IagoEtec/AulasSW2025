<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Ex01.css">
</head>
<body>
    <h1>Form Conta</h1>

    <form method="POST" action="">
        <label>Primeiro Número:</label><br>
        <input type="text" name="n1"><br>

        <label>Segundo Número:</label><br>
        <input type="text" name="n2"><br><br>

        <input type="checkbox" name="soma" value="1"> Soma<br>
        <input type="checkbox" name="sub" value="1"> Subtração<br>
        <input type="checkbox" name="mult" value="1"> Multiplicação<br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];

        if (is_numeric($n1) && is_numeric($n2)) {
            $n1 = floatval($n1);
            $n2 = floatval($n2);

            echo "<div class='resultado'><h2><strong>Resultado:</strong></h2>";

            if (isset($_POST["soma"])) {
                $soma = $n1 + $n2;
                echo "Soma: $soma<br>";
            }

            if (isset($_POST["sub"])) {
                $sub = $n1 - $n2;
                echo "Subtração: $sub<br>";
            }

            if (isset($_POST["mult"])) {
                $mult = $n1 * $n2;
                echo "Multiplicação: $mult<br>";
            }

            if (!isset($_POST["soma"]) && !isset($_POST["sub"]) && !isset($_POST["mult"])) {
                echo "<strong>Nenhuma operação foi selecionada.</strong>";
            }

            echo "</div>";
        } else {
            echo "<p class='erro'><strong>Digite dois números válidos.</strong></p>";
        }
    }
    ?>
</body>
</html>