<?php
// Coleta os dados do formulário
$numero1 = $_GET['numero1'] ?? '';
$numero2 = $_GET['numero2'] ?? '';
$numero3 = $_GET['numero3'] ?? '';

// Verifica se todos os campos foram preenchidos
if ($numero1 and $numero2 and $numero3) {
    // Usa if-else para comparar os números e encontrar o maior
    if ($numero1 >= $numero2 and $numero1 >= $numero3) {
        $maior = $numero1;
    } elseif ($numero2 >= $numero1 and $numero2 >= $numero3) {
        $maior = $numero2;
    } else {
        $maior = $numero3;
    }
    echo "O maior número é: $maior";
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
