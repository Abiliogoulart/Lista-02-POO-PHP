<?php
require_once 'Livro.php';

$livro = new Livro("Clean Code", 100.00);

echo "Preço original: R$ 100.00<br>";
echo "Preço final com imposto (5%): R$ " . $livro->calcularPrecoComImposto();
?>