<?php
if (isset($_GET['nome']) && isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3'])) {
    $nome = $_GET['nome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $media = ($nota1 + $nota2 + $nota3) / 3;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Média</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h2>Resultado</h2>
    <p><strong><?php echo $nome; ?></strong>, sua média é: <strong><?php echo number_format($media, 2); ?></strong></p>
    <a href="media.html" class="btn btn-secondary">Voltar</a>
</body>
</html>
