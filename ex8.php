<?php

//leia o preço de um produto e mostre o novo preço com 5% de desconto

$preco = readline("Digite o preço do produto: ");

echo "O preço do produto com 5% desconto é: ".$preco-($preco*0.05);