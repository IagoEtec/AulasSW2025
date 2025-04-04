<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Fofinho ✿</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    <div class="login-container">
        <h1>Login Fofinho ✿</h1>
        <div class="heart">♡</div>
        
        <form action="processa.php" method="post">
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            
            <button type="submit" class="submit-btn">ENTRAR</button>
        </form>
    </div>
</body>
</html>