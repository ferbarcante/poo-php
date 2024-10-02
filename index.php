<?php

class Pessoa{
    const year = "2004";
    private $nome;
    private $idade;
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

    public function exibirAno(){
        echo self::year;
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

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }
}

class Professor extends Pessoa{
    private $salario;


    public function calcularSalario(){
        $totalSalario = $this->salario * $this->getIdade();
        return $totalSalario;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }
}

$rodrigo = new Professor("Rodrigo", "98892839489", "9382948923", "rodrigo@gmail.com");
echo "nome: ", $rodrigo->getNome(), " cpf: ", $rodrigo->getCpf();
echo"<br>";

$rodrigo->setCidade("Salvador");
echo"<br>", "cidade: ", $rodrigo->getCidade();

echo"<br>";
$rodrigo->welcome();

$rodrigo->setIdade(3);
$rodrigo->setSalario(1000);
$totalSalario = $rodrigo->calcularSalario();

echo $totalSalario;
$rodrigo->exibirAno();

?>