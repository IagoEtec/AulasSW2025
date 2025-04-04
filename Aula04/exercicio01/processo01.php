<?php
    $nome = $_GET['cxnome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "$nome média de suas notas é",$media;



?>