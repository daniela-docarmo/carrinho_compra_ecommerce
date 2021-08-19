<?php 

namespace App;

use App\Produto;

class ItemCarrinho
{
    protected Produto $produto;
    protected int $quantidade;

    /**
     * @param produto
     */
    public function setProduto(Produto $produto)
    {
        $this->produto = $produto;
    }

    /**
     * @param quantidade
     */

    public function setQuantidade(int $quantidade)
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return Produto
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @return int
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }
}