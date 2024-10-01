<?php

class Pessoa{
    private $nome;
    private $cpf;
    private $rg;
    private $email;
    private $endereco;
    private $cidade;
    private $uf;
    private $cep;

    public function __construct($nome, $cpf, $rg, $email){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->email = $email;
    }

    public function welcome(){
        echo "Seja bem vindo(a) ", $this->nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getEnder(){
        return $this->endereco;
    }

    public function setEnder($endereco){
        $this->endereco = $endereco;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
}

$rodrigo = new Pessoa("Rodrigo", "98892839489", "9382948923", "rodrigo@gmail.com");
echo "nome: ", $rodrigo->getNome(), " cpf: ", $rodrigo->getCpf();
echo"<br>";

$rodrigo->setCidade("Salvador");
echo"<br>", "cidade: ", $rodrigo->getCidade();

echo"<br>";
$rodrigo->welcome();
?>