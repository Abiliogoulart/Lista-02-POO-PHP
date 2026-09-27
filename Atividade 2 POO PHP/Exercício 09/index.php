<?php
require_once 'Livro.php';

new Livro("Dom Casmurro", "Machado de Assis");
new Livro("Vidas Secas", "Graciliano Ramos");
new Livro("Capitães da Areia", "Jorge Amado");

Livro::listarTodos();
?>