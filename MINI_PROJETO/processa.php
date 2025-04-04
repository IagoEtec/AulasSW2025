<?php
// Dados válidos (usuário e senha hardcoded)
$usuario_valido = "Badwolfs";
$senha_valida = "Panturrilha";

// Recebe dados do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Verifica credenciais
if ($usuario === $usuario_valido && $senha === $senha_valida) {
    // Credenciais corretas - redireciona para privada.php com o nome do usuário na URL
    header("Location: privada.php?usuario=" . urlencode($usuario));
    exit();
} else {
    // Credenciais incorretas - redireciona para error.php
    header("Location: error.php");
    exit();
}
?>
