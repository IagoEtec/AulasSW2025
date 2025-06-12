<?php
class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        $this->disponivel = false;
    }

    public function devolver() {
        $this->disponivel = true;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function estaDisponivel() {
        return $this->disponivel;
    }

    public function getSituacao() {
        return $this->disponivel ? "Disponível" : "Emprestado";
    }
}
?>
