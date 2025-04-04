<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nasc = $_POST['data_nasc'];
    $cartao = $_POST['cartao'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h2>Dados Cadastrados</h2>
    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
    <p><strong>E-mail:</strong> <?php echo $email; ?></p>
    <p><strong>Data de Nascimento:</strong> <?php echo $data_nasc; ?></p>
    <p><strong>Cartão de Crédito:</strong> <?php echo $cartao; ?></p>
    <a href="cadastro.html" class="btn btn-secondary">Voltar</a>
</body>
</html>
