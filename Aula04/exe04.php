<?php
// Acessa diretamente os dados enviados via POST
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$nascimento = $_POST['nascimento'] ?? '';
$bandeira = $_POST['bandeira'] ?? '';

if ($nome and $email and $nascimento and $bandeira) {
    echo "<h1>Dados Informados:</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Data de Nascimento: $nascimento</p>";
    echo "<p>Bandeira do Cartão: $bandeira</p>";
} else {
    echo "<h1>Por favor, preencha todos os campos.</h1>";
}
?>
