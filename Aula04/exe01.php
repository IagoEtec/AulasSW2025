<?php

$nome = $_GET['cxnome'] ?? '';
$nota1 = $_GET['nota1'] ?? '';
$nota2 = $_GET['nota2'] ?? '';
$nota3 = $_GET['nota3'] ?? '';

if ($nome and $nota1 and $nota2 and $nota3) {

    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "Bem-vindo, $nome! Sua média é: $media";
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
