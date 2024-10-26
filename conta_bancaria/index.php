<?php 
require __DIR__ .'/funcs.php';


$nome = "josé";
$saldo =1000;
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