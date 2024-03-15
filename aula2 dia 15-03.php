<?php

    class forma {
        public function Figura(){
            return ("isto e uma figura");
        }
    }
    class Circulo extends forma{
        ///
    }
    
    class Retangulo extends forma{
        public function figura(){
            return ("isto e uma retangulo");
        }
    }
    
    class Mimado extends forma{
        public function figura(){
            return ("Eu sou o Mimado");
        }
    }
    
    $forma1 = new forma();
    $forma2 = new Circulo();
    $forma3 = new Retangulo();
    $forma4 = new Mimado();
    
    print $forma1->figura() . "\n";
    print $forma2->figura() . "\n";
    print $forma3->figura() . "\n";
    print $forma4->figura() . "\n";
?>
