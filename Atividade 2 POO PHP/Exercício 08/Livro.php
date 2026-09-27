<?php
require_once 'FormatadorTexto.php';

class Livro {
    private $titulo;
    private $preco;

    public static $totalLivros = 0;

    const DESCONTO_PADRAO = 0.10; // 10%

    public function __construct($titulo, $preco) {
        $this->titulo = $titulo;
        $this->preco = $preco;
        self::$totalLivros++;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function obterDetalhesFormatados() {
        $tituloMaiusculo = FormatadorTexto::paraMaiusculas($this->titulo);
        $precoComDesconto = $this->preco - ($this->preco * self::DESCONTO_PADRAO);
        
        return "LIVRO: " . $tituloMaiusculo . " | Preço c/ Desconto: R$ " . $precoComDesconto;
    }
}
?>