<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="Ex05.css">
</head>
<body>
    <h1>Números Pares de 1 até 50</h1>

    <div class="resultado">
        <?php
        for ($i = 1; $i <= 50; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
        ?>
    </div>
</body>
</html>