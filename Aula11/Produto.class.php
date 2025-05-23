<?php // Começo do código PHP

// Criando um molde chamado Produto
class Produto {

    // 🔒 Guardando informações escondidas (ninguém mexe direto)
    private $nome;
    private $preco;
    private $quantidade;

    // 🚪 Portinha mágica que roda assim que o Produto nasce
    public function __construct($nome, $preco, $quantidade) {
        // 👉 Dizendo: "O nome do meu Produto vai ser isso aqui"
        $this->nome = $nome;
        // 👉 Dizendo: "O preço dele vai ser isso aqui"
        $this->preco = $preco;
        // 👉 E a quantidade começa com isso aqui
        $this->quantidade = $quantidade;
    }

    // 🕵️‍♂️ Getter → Pega o nome
    public function getNome() {
        return $this->nome; // 🎁 Toma aqui o nome
    }

    // 🔧 Setter → Muda o nome
    public function setNome($nome) {
        $this->nome = $nome; // 🔄 Troca o nome
    }

    // 🕵️‍♂️ Getter → Pega o preço
    public function getPreco() {
        return $this->preco; // 🎁 Toma aqui o preço
    }

    // 🔧 Setter → Muda o preço
    public function setPreco($preco) {
        $this->preco = $preco; // 🔄 Troca o preço
    }

    // 📦 Adiciona mais itens no estoque
    public function adicionarEstoque($qtd) {
        $this->quantidade += $qtd; // ➕ Soma a quantidade nova
    }

    // 📦 Remove itens do estoque
    public function removerEstoque($qtd) {
        $this->quantidade -= $qtd; // ➖ Tira a quantidade
    }

    // 📢 Mostra na tela os detalhes do Produto
    public function mostrarDetalhes() {
        echo "<h2>" . $this->nome . "</h2>";
        echo "<div class='produto-info'>";
        echo "<strong>Preço:</strong> R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
        echo "<strong>Quantidade em estoque:</strong> " . $this->quantidade;
        echo "</div>";
    }
} // 🏁 Acabou o molde da classe Produto
?>
