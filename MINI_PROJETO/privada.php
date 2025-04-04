<?php
// Recupera o nome do usuário da URL
$usuario = $_GET['usuario'] ?? 'Rockeiro Anônimo';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backstage 🔥</title>
    <link rel="stylesheet" href="css/estilopriv.css">
</head>
<body>
    <div class="privada-container">
        <div class="skulls">☠️ 🤘 ☠️</div>
        <div class="welcome">Bem-vindo ao backstage, <?php echo htmlspecialchars($usuario); ?>!</div>
        <h1>Você está na Área VIP do Rock</h1>
        <p>Aqui é só pra quem tem atitude!</p>
        <p>Login feito com sucesso. Agora é só curtir o som!</p>
        <div class="skulls">☠️ 🤘 ☠️</div>
        <a href="index.php" class="btn">Voltar à entrada</a>
    </div>
</body>
</html>
