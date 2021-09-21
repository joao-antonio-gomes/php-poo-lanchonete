<?php

require 'Prato.php';

class Pizza extends Prato
{
    private string $recheio;
    private string $molho;
    private string $borda;
    
    public function __construct(string $recheio, string $molho, $borda = "SEM BORDA")
    {
        $this->recheio = $recheio;
        $this->molho = $molho;
        $this->borda = $borda;
        $preco = 20;
        $peso = 2;
        if ($borda != "SEM BORDA") {
            $preco = 25;
            $peso = 2.5;
        }
        parent::__construct($preco, $peso);
    }
    
}