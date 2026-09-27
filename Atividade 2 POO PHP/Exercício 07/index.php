<?php
require_once 'Livro.php';

$livro1 = new Livro("O Hobbit", Livro::STATUS_DISPONIVEL);
$livro2 = new Livro("1984", Livro::STATUS_EMPRESTADO);

$livro1->setStatus(Livro::STATUS_INDISPONIVEL);

$livro1->exibir();
$livro2->exibir();
?>