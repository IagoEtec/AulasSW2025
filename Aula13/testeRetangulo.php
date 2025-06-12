<?php
require_once 'Retangulo.class.php';

$ret = new Retangulo(5, 8);

$largura = $ret->getLargura();
$altura = $ret->getAltura();
$area = $ret->calcularArea();
$perimetro = $ret->calcularPerimetro();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Retângulo</title>

    <!-- Fonte manuscrita elegante -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <style>
        body {
            background: url('fundo.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .resultado {
            background-color: rgba(10, 15, 25, 0.9);
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 50, 0.6);
            text-align: center;
            border: 1px solid #1a1f2e;
            color: #dbe9f4;
        }

        h2 {
            font-family: 'Great Vibes', cursive;
            font-size: 38px;
            color: #d0e2ff;
            margin-bottom: 25px;
            text-shadow: 0 0 5px rgba(0, 0, 80, 0.4);
        }

        .info {
            font-size: 18px;
            margin: 12px 0;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <h2>Retângulo</h2>
        <div class="info">Largura: <?php echo $largura; ?></div>
        <div class="info">Altura: <?php echo $altura; ?></div>
        <div class="info">Área: <?php echo $area; ?></div>
        <div class="info">Perímetro: <?php echo $perimetro; ?></div>
    </div>
</body>
</html>
