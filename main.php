<?php
/*
    Nome: Enzo de Campos Machado
    Prof: Rafael SW-Sistemas Web
    Data: 07-03-2024
*/

    class Carro{
        public $modelo;
        public $nome;
        public $montadora;
        public $cor;
        public $ano;
        
        //funçao liga e desliga//
        
        function liga_carro(){
            return "o carro esta ligado";
        }
    
        function desliga_carro(){
             return "o carro esta desligado";
        }
    }


    $Carro1 = new Carro();
    $Carro1->modelo = "SUV";
    $Carro1->nome = "Tracker";
    $Carro1->montadora = "Chevrolet";
    $Carro1->cor = "VERDE";
    $Carro1->ano = "2020";
    
    $Carro2 = new Carro();
    $Carro2->modelo = "Ford";
    $Carro2->nome = "Maverick";
    $Carro2->montadora = "Ford";
    $Carro2->cor = "Preto";
    $Carro2->ano = "2020";

   /* //carro 1
    print $Carro1->modelo . "\n";
    print $Carro1->nome . "\n";
    print $Carro1->montadora . "\n";
    print $Carro1->cor . "\n";
    print $Carro1->ano . "\n\n";
    //carro 2
    print $Carro2->modelo . "\n";
    print $Carro2->nome . "\n";
    print $Carro2->montadora . "\n";
    print $Carro2->cor . "\n";
    print $Carro2->ano . "\n\n";*/
    
    print $Carro1->liga_carro() . "\n";
    print $Carro1->desliga_carro() . "\n";
    print $Carro2->liga_carro() . "\n";
    print $Carro2->desliga_carro();
    
    

?>