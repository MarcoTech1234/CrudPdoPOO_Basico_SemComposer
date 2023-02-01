<?php

require 'App/Model/Conexao.php';
require 'App/Model/Produto.php';
require 'App/Model/ProdutoDao.php';

/*$produto = new \App\Model\Produto();
$produto->setId(1);
$produto->setNome('Arthur');
$produto->setDescricao('Ele usa Creatina como pos treino');*/

$produtoDao = new \App\Model\ProdutoDao;
$produtoDao->delete(3);
$produtoDao->read();
//$produto->update($produto);

foreach($produtoDao->read() as $produto):
    echo $produto['nome']."</br>".$produto['descricao']."<hr>";
endforeach;