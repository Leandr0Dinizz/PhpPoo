<?php
    namespace PHP\Modelo; //Definir o local do projeto
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('cliente.php');

    $pessoa1 = new Pessoa("12356862123","Allan","11999999999","Rua Jeri");
    $pessoa2 = new Pessoa("12345656458","João","11221313131","Rua Blá");
    
    $funcionario1 = new Funcionario(123,"Leandro", 15000, "Gerente",
     "Rua Xesquedele", "11952267889");

    $cliente1 = new Cliente("47139376212","Ismael","1140028922","Rua kalaquinos", "2002/08/01","430");


    echo $pessoa1->imprimir();
    echo $pessoa2->imprimir();
    echo $funcionario1->imprimir();
    echo $cliente1->imprmir();
?>