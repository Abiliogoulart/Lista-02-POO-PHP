<?php
require_once 'Livro.php';


$livro1 = new Livro("Livro A", 30.00);
$livro2 = new Livro("Livro B", 50.00);
$livro3 = new Livro("Livro C", 20.00);


echo "Faturamento Total dos Livros: R$ " . Livro::$faturamentoTotal;
?>