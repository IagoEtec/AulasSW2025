<?php
$logado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login == "etec" && $senha == "informática") {
        $logado = true;
    } else {
        $mensagem = "Login ou senha incorretos.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h2>Resultado</h2>
    <?php if ($logado): ?>
        <p class="text-success">Logado com sucesso!</p>
    <?php else: ?>
        <p class="text-danger"><?php echo $mensagem; ?></p>
        <a href="login.html" class="btn btn-secondary">Tentar novamente</a>
    <?php endif; ?>
</body>
</html>
