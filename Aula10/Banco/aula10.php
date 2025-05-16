<?php
    include "Conta.class.php";

    $conta1 = new Conta ();

    $conta1->Nome = "Fulano de tal";
    $conta1->Cpf = "123.456.789-00";
   // $conta1->Saldo = 500;


    $conta1->ConsultarSaldo();
    echo "<hr>";

    echo $conta1->Depositar(250);
    echo "<hr>";

    $conta1->ConsultarSaldo();
    echo "<hr>";

    echo $conta1->Sacar(800);
    echo "<hr>";
?>