<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Ex02.css">
</head>
<body>
    <h1>Verificar Número Primo</h1>

    <form method="POST" action="">
        <label>Digite um número:</label><br>
        <input type="text" name="numero"><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    function ehPrimokkk($num) {
        if ($num < 2) {
            return false;
        }

        $divisores = 0;

        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $divisores++;
            }
        }

        if ($divisores == 2) {
            return true;
        } else {
            return false;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if (is_numeric($numero) && $numero >= 0) {
            $numero = intval($numero);
            echo "<div class='resultado'>";
            if (ehPrimokkk($numero)) {
                echo "O número $numero é <strong>primo</strong>!";
            } else {
                echo "O número $numero <strong>não</strong> é primo.";
            }
            echo "</div>";
        } else {
            echo "<p class='erro'>Digite um número válido (positivo).</p>";
        }
    }
    ?>
</body>
</html>