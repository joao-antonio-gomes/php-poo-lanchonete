<?php

abstract class Prato
{
    private string $dataValidade;
    private float $preco;
    private float $peso;

    public function __construct(float $preco, float $peso)
    {
        $this->dataValidade = self::formataDataValidade();
        $this->peso = $peso;
        $this->preco = $preco;
    }
    
    static function formataDataValidade(): string {
        return date("d/m/Y", strtotime(' + 2 days'));
    }
    
    public function getPreco(): float
    {
        return $this->preco;
    }
}