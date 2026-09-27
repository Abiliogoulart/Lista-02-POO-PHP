<?php
class Livro {
    private $titulo;
    private $preco;

    const TAXA_IMPOSTO = 0.05; // 5% de imposto

    public function __construct($titulo, $preco) {
        $this->titulo = $titulo;
        $this->preco = $preco;
    }

    public function calcularPrecoComImposto() {
        $valorImposto = $this->preco * self::TAXA_IMPOSTO;
        return $this->preco + $valorImposto;
    }
}
?>