<?php

/*
    Nome: Enzo de Campos Machado
    Aula: SW-Sistemas Web
    Prof: Rafael
    Dia: 14/03/2024
*/

    class Fruta {
        public $nome;
        public $cor;
        public $peso;
        
        function set_nome($nome) {
            $this->nome = $nome;
        }
        function set_cor($cor) {
            $this->cor = $cor;
        }
        function set_peso($peso) {
            $this->peso = $peso;
        }
    }
    
    $manga = new Fruta();
    
    $manga->set_nome('Manga Rosa');
    $manga->set_cor('Rosa');
    $manga->set_peso('200g');
    print $manga->nome . "\n";
    print $manga->cor . "\n";
    print $manga->peso . "\n\n";
    

    
    
    $manga->set_nome('Manga Coquinho');
    $manga->set_cor('Amarela');
    $manga->set_peso('200g');
    print $manga->nome . "\n";
    print $manga->cor . "\n";
    print $manga->peso . "\n";

?>