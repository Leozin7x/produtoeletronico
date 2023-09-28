<?php
// Chamando os arquivos necessários para as operações
require "conexao.php";
require "ProdutoEletronico.php";
require "RepositorioProdutoEletronico.php";

//Instanciar o objeto
$produtoeletronico1 = new ProdutoEletronico("motorola","moto g6","smartphone","1000","6polegadas");

//Instancio o repositório para cadastrar
$repositorioProdutoEletronico = new Repositorioprodutoeletronico();

$repositorioProdutoEletronico->cadastrar($produtoeletronico1,$banco);

