<?php

class ReceitaCulinária{
    // Primeiro defina as variáveis.
    private $marca;
    private $modelo;
    private $funcoes;
    private $preco;
    private $tamanho;
//Função que vai executar ao ser instanciado o objeto
    public function __construct(string $nome, string $ingredientes, string $modopreparo, string $tempocozimento, string $páisorigem){
        $this->definirMarca($marca);
        $this->definirModelo($modelo);
        $this->definirFunções($funcoes);
        $this->definirPreço($preco);
        $this->definirTamanho($tamanho);
    }
    //Funções de operações dos objetos
    public function definirMarca(string $marca){
        $this->marca = $marca;
    }

    public function definirModelo(string $modelo){
        $this->modelo = $modelo;
    }

    public function definirFunções(string $funcoes){
        $this->funcoes = $funcoes;
    }
    public function definirPreço(string $preco){
        $this->preco = $preco;
    }
    public function definirTamanho(string $tamanho){
        $this->tamanho = $tamanho;
    }

    public function exibirMarca(){
        return $this->marca;
    }

    public function exibirModelo(){
        return $this->modelo;
    }                                                                     

    public function exibirfunções(){
        return $this->funcoes;
    }
    public function exibirpreco(){
        return $this->preco;
    }
    public function exibirTamanho(){
        return $this->tamanho;
    }
}