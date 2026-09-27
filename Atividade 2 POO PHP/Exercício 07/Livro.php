<?php
class Livro {
    private $titulo;
    private $status;

    const STATUS_DISPONIVEL = "Disponível em Estoque";
    const STATUS_EMPRESTADO = "Emprestado no Momento";
    const STATUS_INDISPONIVEL = "Indisponível / Esgotado";

    public function __construct($titulo, $status = self::STATUS_DISPONIVEL) {
        $this->titulo = $titulo;
        $this->status = $status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function exibir() {
        echo "Livro: " . $this->titulo . " | Status: " . $this->status . "<br>";
    }
}
?>