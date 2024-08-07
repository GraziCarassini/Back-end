<?php

//leia o salário de um funcionário e mostre seu novo salario com 15% de aumento

$salario = readline("Digite seu salário: ");
$novosalario = $salario + ($salario*0.15);

echo "Seu novo salário com 15% de aumento é = " .$novosalario;