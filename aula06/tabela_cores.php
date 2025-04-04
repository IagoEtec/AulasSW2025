<html>
<head>
    <title>Tabela Simples</title>
    <style>
        table { border: 1px solid black; }
        td { padding: 8px; border: 1px solid gray; }
        .cinza { background-color: #f0f0f0; }
        .branco { background-color: white; }
    </style>
</head>
<body>
    <h2>Minha Primeira Tabela</h2>
    
    <table>
        <?php
        for ($i = 1; $i <= 8; $i++) {
            $cor = ($i % 2 == 0) ? 'cinza' : 'branco';
            echo "<tr class='$cor'>";
            echo "<td>Linha $i, Coluna 1</td>";
            echo "<td>Linha $i, Coluna 2</td>";
            echo "<td>Linha $i, Coluna 3</td>";
            echo "<td>Linha $i, Coluna 4</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>