<?php

    class Cliente{
        public function abre_conta(){
            return("Abriu uma conta.");
        }
    }
    
    class PF extends Cliente{
        public function abre_conta(){
            return("Conta PF aberta com sucesso");
        } 
    }
    
    class PJ extends Cliente{
        public function abre_conta(){
            return("Conta PJ aberta com sucesso");
        }
    }
    
    $conta1 = new Cliente();
    $conta2 = new PF();
    $conta3 = new PJ();
    
    print $conta1->abre_conta() . "\n";
    print $conta2->abre_conta() . "\n";
    print $conta3->Abre_conta();

?>
