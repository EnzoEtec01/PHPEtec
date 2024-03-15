<?php

    class Carro{
        
        public $placa;
        public $nome;
        
        public function __construct($placa,$nome){
            $this->placa = $placa;
            $this->nome = $nome;
        }
        
        function get_placa(){
            return $this->placa;
        }
        
        function set_placa($placa){
            $this->placa = $placa;
        }
        
        function get_nome(){
            return $this->placa;
        }
        
        function set_nome($nome){
            $this->nome = $nome;
        }
    }
    
    $fusca = new Carro('Gol', 'YYY-9999');
    
    $fusca->set_nome('Fusca');
    $fusca->set_placa('XXX-0000');
    
    print $fusca->get_nome() . "\n";
    print $fusca->get_placa();
    
    

?>
