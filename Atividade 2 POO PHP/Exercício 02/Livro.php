<?php
class Livro {
    private $titulo;
    private $preco;

    public static $faturamentoTotal = 0;

    public function __construct($titulo, $preco) {
        $this->titulo = $titulo;
        $this->preco = $preco;

        self::$faturamentoTotal += $preco;
    }
}
?>