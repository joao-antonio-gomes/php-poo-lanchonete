<?php

class Pedido
{
    private string $nomeCliente;
    private array $itens = [];
    private float $taxaServico = 0.05;
    
    public function __construct(string $nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }
    
    public function getItens(): array
    {
        return $this->itens;
    }
    
    public function adicionaItemNoPedido(Prato $item)
    {
        array_push($this->itens, $item);
    }
    
    public function getPrecoTodosItens(): float
    {
        $pratos = $this->getItens();
        $precoTotal = array_map(function ($item) {
            return $item->getPreco();
        }, $pratos);
        return array_reduce($precoTotal, function ($total, $actual) {
            return $total + $actual;
        }, 0);
    }
    
    public function calcularTotal(): float
    {
        $precoTodosItens = $this->getPrecoTodosItens();
        return $precoTodosItens + ($this->taxaServico * $precoTodosItens);
    }
    
    public function mostrarFatura(float $valor): float
    {
        $valorTotalPedido = $this->calcularTotal();
        return ($valor - $valorTotalPedido);
    }
}