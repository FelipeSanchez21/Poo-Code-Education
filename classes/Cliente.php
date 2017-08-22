<?php

class Cliente
{

    public $nome;
    public $telefone;
    public $endereco;
    public $cpf;

    public function __construct($nome, $telefone, $endereco, $cpf){

        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->cpf = $cpf;

    }

}

?>














