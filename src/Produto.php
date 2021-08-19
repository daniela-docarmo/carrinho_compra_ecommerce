<?php 

namespace App;

/**
 * Classe Produto
 */

class Produto
{
    protected string $nome;
    protected float $valor;

    /**
     * @return self
     */

    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return self
     * @param valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @return valor
     */
    public function getValor()
    {
        return $this->valor;
    }
}