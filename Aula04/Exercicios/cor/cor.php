<?php
$cor = isset($_POST['cor']) ? $_POST['cor'] : 'white';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body style="background-color: <?php echo $cor; ?>;" class="container mt-4">
    <h2>Cor de Fundo Alterada</h2>
    <p>A cor escolhida foi: <strong><?php echo $cor; ?></strong></p>
    <a href="cor.html" class="btn btn-secondary">Voltar</a>
</body>
</html>
