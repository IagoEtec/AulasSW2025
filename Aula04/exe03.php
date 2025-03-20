<?php
// Acessa diretamente os parâmetros 'login' e 'senha' do formulário enviado via POST
$login = $_POST['login'] ?? '';
$senha = $_POST['senha'] ?? '';

if ($login && $senha) {
    if ($login == 'etec' && $senha == 'informática') {
        echo "<h1>Logado com sucesso!</h1>";
    } else {
        echo "<h1>Login ou senha incorretos!</h1>";
    }
} else {
    echo "<h1>Por favor, preencha todos os campos de login e senha.</h1>";
}
?>
