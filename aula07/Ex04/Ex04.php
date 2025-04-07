<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Ex03.css">
    <title>Document</title>
    <link rel="stylesheet" href="Ex04.css">
</head>
<body>
    <h1>Cidades e seus Estados</h1>

    <?php
    // Array associativo com 5 cidades e seus respectivos estados
    $cidadesEstados = [
        "São Paulo" => "SP",
        "Belo Horizonte" => "MG",
        "Curitiba" => "PR",
        "Salvador" => "BA",
        "Fortaleza" => "CE"
    ];

    echo "<div class='resultado'>";
    echo "<ul>";
    foreach ($cidadesEstados as $cidade => $estado) {
        echo "<li><strong>$cidade</strong> – $estado</li>";
    }
    echo "</ul>";
    echo "</div>";
    ?>
</body>
</html>