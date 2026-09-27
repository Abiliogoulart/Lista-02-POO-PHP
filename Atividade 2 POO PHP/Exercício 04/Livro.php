<?php
class Livro {
    private $titulo;
    private $preco;

    public function __construct($titulo, $preco) {
        $this->titulo = $titulo;
        $this->preco = $preco;
    }

    public static function criarPadrao() {
        return new self("Livro Sem Nome", 0.00);
    }

    public function exibir() {
        echo "Livro: " . $this->titulo . " - Preço: R$ " . $this->preco . "<br>";
    }
}
?>