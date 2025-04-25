<?php
    include_once 'Pessoa.class.php';
    $pessoa1 = new Pessoa;

    $pessoa1->Nome = "Fulano";
    $pessoa1->Altura = 1.85;
    $pessoa1->Peso = 85;

    $pessoa1->MostrarDados();

    $pessoa2 = new Pessoa;
    
    $pessoa2->Nome = "Maria";
    $pessoa2->Altura = 3.05;
    $pessoa2->Peso = 180;

    $pessoa2->MostrarDados();
?>
