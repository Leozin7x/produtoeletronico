<?php

class RepositorioProdutoEletronico{
    
    public function cadastrar(ProdutoEletronico $produtoeletronico, PDO $pdo){
        //Preparando a instrução SQL para criar o registro na tabela
        $codigoSql = "INSERT INTO PRODUTOELETRONICO(marca,modelo,funcoes,preco,tamanho) VALUES (:c,:n,:i)";
    
        $marca = $produtoeletronico->exibirmarca();
        $modelo = $produtoeletronico->exibirmodelo();
        $funcoes = $produtoeletronico->exibirfuncoes();
        $preco = $produtoeletronico->exibirpreco();
        $tamanho = $produtoeletronico->exibirtamanho();

        //Vou preparar as instruções
        $inserir = $pdo->prepare($codigoSql);
        //Definindo o valor dos parâmetros
        $inserir->bindParam(":c",$marca);
        $inserir->bindParam(":n",$modelo);
        $inserir->bindParam(":i",$funcoes);
        $inserir->bindParam(":i",$preco);
        $inserir->bindParam(":i",$tamanho);
        //Executa o comando de inserir no banco
        $inserir->execute();
    }

    public function listar(PDO $banco) {
        $sql = "SELECT * FROM PRODUTOELETRONICO";

        //Executa o sql do banco 
        $select = $banco->query($sql);

        //Estrutura os valores como obtidos pelo $select como um vetor indexado 
        return $select->fetchAll(PDO::FETCH_ASSOC); 
    }
}