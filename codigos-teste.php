<?php

require 'Pedido.php';
require 'Pizza.php';
require 'Salgadinho.php';
require 'TipoSalgadinho.php';


$pedido1 = new Pedido("João");
$pizza = new Pizza('marguerita', 'tomate');
$pizza2 = new Pizza('marguerita', 'tomate');
$salgadinho = new Salgadinho(TipoSalgadinho::Assado, 'batata', 'frango');


$pedido1->adicionaItemNoPedido($pizza);
$pedido1->adicionaItemNoPedido($salgadinho);
var_dump($pedido1->getItens());
$pedido1->adicionaItemNoPedido($pizza2);



echo "O pedido deu um total de R$ {$pedido1->calcularTotal()} \n";
$pagamento = 50.00;
echo "Você pagou R$ {$pagamento} e seu troco é de R$ {$pedido1->mostrarFatura($pagamento)} \n";

