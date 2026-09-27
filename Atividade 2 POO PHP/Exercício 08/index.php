<?php
require_once 'Livro.php';

$livro1 = new Livro("dom casmurro", 50.00);
$livro2 = new Livro("o alienista", 30.00);

echo $livro1->obterDetalhesFormatados() . "<br>";
echo $livro2->obterDetalhesFormatados() . "<br>";

echo "Total de livros cadastrados: " . Livro::$totalLivros;
?>