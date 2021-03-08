<?php
class Pessoa
{
    private $nome;
    private $sexo;
    private $idade;

    /**
     * Construtor da classe
     *
     * @param string $nome
     * @param string $sexo
     * @param int $idade
     */
    public function __construct($nome, $sexo, $idade)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        if ($idade > 0 && is_int($idade)) {
            $this->idade = $idade;
        }        
    }

    /**
     * Incrementa um a idade quando chamada
     *
     * @return void
     */
    public function fazerAniversario()
    {
        $this->idade++;
    }

    /**
     * Retorna o nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome; 
    }

    /**
     * Retorna o sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Retorna a idade
     *
     * @return integer 
     */
    public function getIdade()
    {
        return $this->idade;
    }
}