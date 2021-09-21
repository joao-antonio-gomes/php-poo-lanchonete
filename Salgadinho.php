<?php

class Salgadinho extends Prato
{
    private string $tipo;
    private string $massa;
    private string $recheio;
    
    public function __construct(string $tipo, string $massa, string $recheio)
    {
        $this->recheio = $recheio;
        $this->massa = $massa;
        $this->tipo = $tipo;
        $preco = 5;
        $peso = 0.25;
        parent::__construct($preco, $peso);
    }
}