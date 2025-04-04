<?php
// Recupera o nome do usuário da URL
$usuario = $_GET['usuario'] ?? 'Visitante';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Privada ✿</title>
    <link rel="stylesheet" href="css/estilopriv.css">

</head>
<body>
    <div class="privada-container">
        <div class="hearts">✿ ♡ ✿</div>
        <div class="welcome">Bem-vinda, <?php echo htmlspecialchars($usuario); ?>!</div>
        <h1>Área Privada ✿</h1>
        <p>Esta é sua área especial com conteúdo exclusivo.</p>
        <p>Você fez login com sucesso!</p>
        <div class="hearts">✿ ♡ ✿</div>
        <a href="index.php" class="btn">Voltar ao Login</a>
    </div>
</body>
</html>