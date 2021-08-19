<?php

namespace App;

use App\ItemCarrinho;


/**
 * Classe carrinho
 */
class Carrinho {

    /**
     * ItemCarrinho[]
     */
    private array $itens;

    /**
     * @param ItemCarrinho $item
     * @return self
     */
    public function adicionarItem(ItemCarrinho $item): self
    {
        $this->itens[] = $item;
        return $this;
    }

    /**
     * @return int
     */
    public function obterQuantidadeItens(): int
    {
        return count($this->itens);
    }

    /**
     * @return float
     */
    public function obterValorFatura(): float
    {
        
        $valorTotalFatura = 0;

        foreach($this->itens as $itemCarrinho){
            $produto = $itemCarrinho->getProduto();
            $quantidaProduto = $itemCarrinho->getQuantidade();
            $valorProduto = $produto->getValor();

            $valorTotalItem = $valorProduto * $quantidaProduto;
            
            $valorTotalFatura = $valorTotalFatura + $valorTotalItem;
        }

        return  (float)$valorTotalFatura;
    }
}