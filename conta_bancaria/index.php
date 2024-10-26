<?php 

$nome = "josé";
$saldo =1000;

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

$opcao = 0;

while($opcao != 4){
    echo "\n========================\n";
    echo "Escolha uma opção: \n\n";
    echo "1 - Consultar saldo \n";
    echo "2 - Sacar \n";
    echo "3 - Depositar saldo \n";
    echo "4 - Sair \n";
    echo "========================\n";

    $opcao = (int) fgets(STDIN);
    system("clear");
    switch ($opcao) {
        case 1 :
            print(retornaSaldo($nome, $saldo));
            break;

        case 2 :
            $saldo = sacar($saldo);
            break;

        case 3 :
            $saldo = deposito($saldo);
            break;
        case 4 :
            break;
        
        default:
        "Valor inesperado";
        break;
    }
}