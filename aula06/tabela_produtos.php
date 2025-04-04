<html>
<head>
    <title>Produtos</title>
    <style>
        table { border: 1px solid black; }
        td, th { padding: 8px; border: 1px solid gray; }
        th { background-color: #ddd; }
    </style>
</head>
<body>
    <h2>Lista de Produtos</h2>
    
    <?php
    $produtos = array(
        array("Televisão", "R$ 1.200,00", "Eletrônico"),
        array("Camiseta", "R$ 49,90", "Vestuário"),
        array("Arroz", "R$ 18,50", "Alimento"),
        array("Sofá", "R$ 899,90", "Móvel")
    );
    ?>
    
    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
        <?php
        foreach ($produtos as $produto) {
            echo "<tr>";
            echo "<td>$produto[0]</td>";
            echo "<td>$produto[1]</td>";
            echo "<td>$produto[2]</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>