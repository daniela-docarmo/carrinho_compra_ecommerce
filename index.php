<?php

require __DIR__ . "/vendor/autoload.php";

use App\ItemCarrinho;
use App\Carrinho;
use App\Produto;

$carrinho = new Carrinho();

$item1 = new ItemCarrinho();
$camiseta = new Produto();
$camiseta->setNome("camiseta")
    ->setValor(10);
$item1->setProduto($camiseta);
$item1->setQuantidade(2);

// Camisa = R$ 10,00 - Quantidade = 2
// Total Camisas = R$ 20,00

$item2 = new ItemCarrinho();
$calca = new Produto();
$calca->setNome("calca")
    ->setValor(20);
$item2->setProduto($calca);
$item2->setQuantidade(3);

//Calças = R$ 20,00 - Quantidade = 3
//Total = R$ 60,00

$carrinho->adicionarItem($item1)
    ->adicionarItem($item2);

// Total da Fatura = R$ 80,00

echo "Quantidade de itens no carrinho ".$carrinho->obterQuantidadeItens().PHP_EOL;

echo "Valor total do carrinho R$". number_format($carrinho->obterValorFatura(),2,",", ".".PHP_EOL);