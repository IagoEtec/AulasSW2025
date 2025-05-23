<?php // Começo do código PHP
echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja MFghostBR</title>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Rock Salt", "Arial Black", sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 20px;
        }
        
        .produto-container {
            background-color: #111;
            border: 3px solid #ff0000;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 0 15px #ff0000;
        }
        
        .produto-container h2 {
            color: #ff0000;
            text-shadow: 0 0 5px #ff0000;
            margin-top: 0;
        }
        
        .produto-info {
            color: #fff;
            font-size: 18px;
            line-height: 1.6;
        }
        
        .produto-info strong {
            color: #ff0000;
        }
        
        hr {
            border: 0;
            height: 3px;
            background: linear-gradient(90deg, #ff0000, #000, #ff0000);
            margin: 30px 0;
            box-shadow: 0 0 10px #ff0000;
        }
    </style>
</head>
<body>
    <h1 style="color: #ff0000; text-align: center; text-shadow: 0 0 10px #ff0000;">Loja MFghostBR</h1>
';

// 📦 Puxando o molde Produto lá do arquivo Produto.class.php
require_once 'Produto.class.php';

// 🎨 Criando um Produto novo, chamado "Celular", que custa 10000 e tem 2 unidades
$produto1 = new Produto("Chevrolet Corsa Wind 2001", 10000, 2);
// 🎨 Criando um Produto novo, chamado "Celular", que custa 10000 e tem 2 unidades
$produto2 = new Produto("Renault Clio 2000", 9000, 1);

// 👀 Mostrando na tela como esse Produto tá
echo '<div class="produto-container">';
$produto1->mostrarDetalhes();
echo '</div>';
// 👀 Mostrando na tela como esse Produto tá
echo '<div class="produto-container">';
$produto2->mostrarDetalhes();
echo '</div>';
echo "<hr>";

// ➕ Chegou mais 5 unidades no estoque
$produto1->adicionarEstoque(5);
// ➕ Chegou mais 2 unidades no estoque
$produto2->adicionarEstoque(2);

// 👀 Mostrando de novo pra ver como ficou
echo '<div class="produto-container">';
$produto1->mostrarDetalhes();
echo '</div>';
// 👀 Mostrando de novo pra ver como ficou
echo '<div class="produto-container">';
$produto2->mostrarDetalhes();
echo '</div>';
echo "<hr>";

// ➖ Venderam 3 unidades
$produto1->removerEstoque(3);
// ➖ Venderam 1 unidades
$produto1->removerEstoque(1);

// 👀 Mostrando de novo pra ver o estoque atualizado
echo '<div class="produto-container">';
$produto1->mostrarDetalhes();
echo '</div>';
// 👀 Mostrando de novo pra ver o estoque atualizado
echo '<div class="produto-container">';
$produto2->mostrarDetalhes();
echo '</div>';
echo "<hr>";

// 🔄 O chefe falou pra trocar o produto e aumentar o preço
$produto2->setNome("Fiat Uno Mille 1997"); // 📝 Nome novo
$produto2->setPreco(7500);// 💰 Preço novo
$produto1->setPreco(9500);// 💰 Preço novo

// 👀 Mostrando como ficou depois das mudanças
echo '<div class="produto-container">';
$produto1->mostrarDetalhes();
echo '</div>';
// 👀 Mostrando como ficou depois das mudanças
echo '<div class="produto-container">';
$produto2->mostrarDetalhes();
echo '</div>';
echo "<hr>";

echo '</body>
</html>';
?>