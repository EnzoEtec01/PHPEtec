<?php

    class Fruta{
        public $nome;
        public $cor;
    }
    
    $banana = new Fruta();
    $banana->nome = "Banana";
    $banana->cor = "Amarela";
    
    $morango = new Fruta();
    $morango->nome = "Morango";
    $morango->cor = "Vermelho";
    
    $cereja = new Fruta();
    $cereja->nome = "Cereja";
    $cereja->cor = "Vermelho";
    
    $pitanga = new Fruta();
    $pitanga->nome = "Pitanga";
    $pitanga->cor = "Laranja";
    
    $abacaxi = new Fruta();
    $abacaxi->nome = "Abacaxi";
    $abacaxi->cor = "Amarelo e Verde";
    
    print $banana->cor . "\n";
    print $morango->cor . "\n";
    print $cereja->cor . "\n";
    print $pitanga->cor . "\n";
    print $abacaxi->cor . "\n";
?>
