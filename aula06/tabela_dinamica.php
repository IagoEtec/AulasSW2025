<html>
<head>
    <title>Tabela Dinâmica</title>
    <style>
        table { border: 1px solid black; }
        td { padding: 8px; border: 1px solid gray; }
    </style>
</head>
<body>
    <h2>Criar Tabela</h2>
    
    <form method="post">
        Linhas: <input type="number" name="linhas" min="1" max="10"><br>
        Colunas: <input type="number" name="colunas" min="1" max="5"><br>
        <input type="submit" value="Criar">
    </form>
    
    <?php
    if (isset($_POST['linhas']) && isset($_POST['colunas'])) {
        $linhas = $_POST['linhas'];
        $colunas = $_POST['colunas'];
        
        echo "<table>";
        for ($i = 1; $i <= $linhas; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $colunas; $j++) {
                echo "<td>Linha $i, Coluna $j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>