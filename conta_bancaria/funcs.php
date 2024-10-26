<?php

function retornaSaldo($nome, $saldo){
    return "\n>>>>>>>>>>>>>>>>>>>>>>>>\nOlá $nome seu saldo é $saldo\n>>>>>>>>>>>>>>>>>>>>>>>>\n";
}

function sacar($saldo){

    echo "Digite o valor para ser retirado: \n";
    $retirar = (int)fgets(STDIN);
    if ($saldo - $retirar >= 0) {
        $saldo -= $retirar;
    }else{
        system("clear");
        echo "\n>>>>>>>>>>>>>>>>>>>>>>>>\nSaldo insuficiente, operação cancelada!\n>>>>>>>>>>>>>>>>>>>>>>>>\n";
        return $saldo;
    }
    system("clear");
    echo "\n>>>>>>>>>>>>>>>>>>>>>>>>\nValor retirado!\nSeu novo saldo é $saldo\n>>>>>>>>>>>>>>>>>>>>>>>>\n";
    return $saldo;
}

function deposito($saldo){

    echo "Digite o valor do depósito: \n";
    $depositar = (int)fgets(STDIN);
    if ($depositar >0) {
        $saldo += $depositar;
    }else{
        system("clear");
        echo "\n>>>>>>>>>>>>>>>>>>>>>>>>\nNão poderá inserir um valor negativo, operação cancelada!\n>>>>>>>>>>>>>>>>>>>>>>>>\n";
        return $saldo;
    }
    system("clear");
    echo "\n>>>>>>>>>>>>>>>>>>>>>>>>\nValor depositado!\nSeu novo saldo é $saldo\n>>>>>>>>>>>>>>>>>>>>>>>>\n";
    return $saldo;
}