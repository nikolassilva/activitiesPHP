<?php
require_once __DIR__.'/lib/Pessoa.php';
require_once __DIR__.'/lib/Livro.php';

$p1 = new Pessoa('Matheus', 'Masculino', 21);
$p2 = new Pessoa('Mariana', 'Feminino', 23);
$p3 = new Pessoa('Carlos', 'Masculino', 50);

$l1 = new Livro('A volta dos que não foram', 'Antônio Lessa', 20, 15, $p1);
$l1->abrir();
$l1->folhear(3);

$l2 = new Livro('Harry Potter', 'J. K. Rowling', 400, 350, $p2);
$l2->abrir();
$l2->avancarPag();

$l3 = new Livro('O Senhor dos Anéis', 'J. R. R. Tolkien', 1000, 400, $p3);
$l3->folhear(14);

$l4 = new Livro('O Código da Vinci', 'Dan Brown', 300, 200, $p2);
$l4->abrir();

$l1->detalhes();
$l2->detalhes();
$l3->detalhes();
$l4->detalhes();
