<?php
require_once 'Livro.php';


$livro1 = new Livro("Dom Casmurro");
$livro2 = new Livro("1984");
$livro3 = new Livro("O Alquimista");


echo "Total de livros criados: " . Livro::$contador;
?>