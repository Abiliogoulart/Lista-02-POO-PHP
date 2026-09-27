<?php
class Livro {
    private $titulo;

    public static $contador = 0;

    public function __construct($titulo) {
        $this->titulo = $titulo;

        self::$contador++;
    }

    public function getTitulo() {
        return $this->titulo;
    }
}
?>