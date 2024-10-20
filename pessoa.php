<?php

class Pessoa
{
    public $idade;
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

//pessoa 2 é um obj que faz referencia a pessoa
$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade;
