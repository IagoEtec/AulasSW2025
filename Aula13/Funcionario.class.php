<?php
class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($porcentagem) {
        $this->salario += $this->salario * ($porcentagem / 100);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSalario() {
        return $this->salario;
    }
}
?>