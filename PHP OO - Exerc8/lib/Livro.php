<?php
require_once __DIR__.'/Publicacao.php';

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    /**
     * Construtor da classe
     *
     * @param string $titulo
     * @param string $autor
     * @param int $totPaginas
     * @param int $pagAtual
     * @param Pessoa $leitor
     */
    public function __construct($titulo, $autor, $totPaginas, $pagAtual, Pessoa $leitor )
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        if ($totPaginas > 0) {
            $this->totPaginas = $totPaginas;
        }
        if ($pagAtual <= $totPaginas && $pagAtual > 0) {
            $this->pagAtual = $pagAtual;
        }
        $this->aberto = false;
        $this->leitor = $leitor->getNome();
    }

    /**
     * Para abrir o livro
     *
     * @return void
     */
    public function abrir()
    {
        $this->aberto = true;
    }

    /**
     * Para fechar o livro
     *
     * @return void
     */
    public function fechar()
    {
        $this->aberto = false;
    }

    /**
     * Para folhear a quantidade de páginas passadas
     * por parâmetro
     *
     * @param int $qntdFolhas
     * @return void
     */
    public function folhear($qntdFolhas) 
    {
        if ($this->aberto) {
            if ($qntdFolhas + $this->pagAtual <= $this->totPaginas) {
                $this->pagAtual += $qntdFolhas;
            }
        }
    }

    /**
     * Avançar 1 página
     *
     * @return void
     */
    public function avancarPag()
    {
        if ($this->aberto) {
            if ($this->pagAtual < $this->totPaginas) {
                $this->pagAtual++;
            }
        }      
    }

    /**
     * Voltar 1 página
     *
     * @return void
     */
    public function voltarPag()
    {
        if ($this->aberto) {
            if ($this->pagAtual > 1) {
                $this->pagAtual--;
            }
        }   
    }

    /**
     * Imprimir detalhes do livro
     *
     * @return void
     */
    public function detalhes()
    {
        echo 'Livro: ' . $this->titulo;
        echo '<hr/>';
        echo 'Autor: ' . $this->autor;
        echo '<hr/>';
        echo 'Leitor: ' . $this->leitor;
        echo '<hr/>';
        echo 'Total de páginas: '. $this->totPaginas;
        echo '<hr/>';
        echo 'Página atual: '. $this->pagAtual;
        echo '<hr/>';
        if ($this->aberto) {
            echo 'Situação do livro: aberto';
        } else {
            echo 'Situação do livro: fechado';
        }

        echo '<hr/>';
        echo '<br/>';
    }
}