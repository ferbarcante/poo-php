<?php

class Pessoa{
    public $nome;
    public $cpf;
    public $rg;
    public $email;
    public $endereco;
    public $cidade;
    public $uf;
    public $cep;

    public function __construct($nome, $cpf, $rg, $email){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->email = $email;
    }

    
}

$rodrigo = new Pessoa("Rodrigo", "98892839489", "9382948923", "rodrigo@gmail.com");
echo "nome: ", $rodrigo->nome, " cpf: ", $rodrigo->cpf;

?>