<?php
require_once __DIR__.'/lib/Pessoa.php';
require_once __DIR__.'/lib/Livro.php';

$p1 = new Pessoa('Matheus', 'Masculino', 21);
$p2 = new Pessoa('Mariana', 'Feminino', 23);
$p3 = new Pessoa('Carlos', 'Masculino', 50);

$l1 = new Livro('A Cabana', 'William P. Young', 500, 1, $p1);
$l1->abrir();
$l1->folhear(5);

$l2 = new Livro('Harry Potter', 'J. K. Rowling', 400, 350, $p2);
$l2->abrir();
$l2->avancarPag();

$l3 = new Livro('O Senhor dos Anéis', 'J. R. R. Tolkien', 1000, 400, $p3);
$l3->folhear(14); //não deve ser possível pois o livro não foi aberto

$l4 = new Livro('O Código da Vinci', 'Dan Brown', 300, 200, $p2);
$l4->abrir();
$l4->voltarPag();

$l1->detalhes();
$l2->detalhes();
$l3->detalhes();
$l4->detalhes();
