<?php
include_once 'Aluno.class.php';
$fulano = new Aluno("Brenildo", 10, 7);

$nome = $fulano->getNome();
$media = $fulano->calcularMedia();
$situacao = $fulano->verificarSituacao();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Aluno</title>
    
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
            background-color: rgba(10, 15, 25, 0.9); /* fundo escuro semitransparente */
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

        .aprovado {
            color: #4CAF50;
            font-weight: bold;
        }

        .reprovado {
            color: #E53935;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <h2>Resultado Final</h2>
        <div class="info">Aluno: <?php echo $nome; ?></div>
        <div class="info">Média: <?php echo number_format($media, 2); ?></div>
        <div class="info">
            Situação:
            <span class="<?php echo strtolower($situacao); ?>">
                <?php echo $situacao; ?>
            </span>
        </div>
    </div>
</body>
</html>
