<?php
// Acessa diretamente a cor escolhida via POST
$cor = $_POST['cor'] ?? '';

if ($cor) {
    echo "<style>body { background-color: $cor; }</style>";
} else {
    echo "<h1>Escolha uma cor para alterar o fundo da página.</h1>";
}
?>