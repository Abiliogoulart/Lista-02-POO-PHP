<?php
class Livro {
    private $titulo;
    private $autor;

    private static $todos = [];

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;

        self::$todos[] = $this;
    }

    public function exibir() {
        echo "Livro: " . $this->titulo . " - Autor: " . $this->autor . "<br>";
    }

    public static function listarTodos() {
        echo "<h3>Lista de Todos os Livros Guardados:</h3>";
        foreach (self::$todos as $obj) {
            $obj->exibir();
        }
    }
}
?>