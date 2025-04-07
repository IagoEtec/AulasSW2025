<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Ex03.css">
    <title>Document</title>
</head>
<body>
    <h1>Tabuada com WHILE</h1>
    <form method="POST" action="">
        <label>Digite um número:</label><br>
        <input type="number" name="numero"><br><br>
        <input type="submit" value="Exibir Tabuada">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if (is_numeric($numero)) {
            $numero = intval($numero);
            echo "<div class='resultado'>";
            echo "<h3>Tabuada do $numero</h3>";
            $i = 1;
            while ($i <= 10) {
                $resultado = $numero * $i;
                echo "$numero x $i = $resultado<br>";
                $i++;
            }
            echo "</div>";
        } else {
            echo "<p class='erro'>Digite um número válido.</p>";
        }
    }
    ?>
</body>
</html>