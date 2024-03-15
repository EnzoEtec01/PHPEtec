<?php

    class Cliente{
        public $nome;
        public $cpf;
        public $dinheiro;

        public function __contrucao($nome,$cpf,$dinheiro){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->dinheiro = $dinheiro;
        }

        function get_nome(){
            return $this->nome;
        }

        function set_nome($nome){
            $this->nome = $nome;
        }

        function get_cpf(){
            return $this->cpf;
        }

        function set_cpf($cpf){
            $this->cpf = $cpf;
        }

        function get_dinheiro(){
            return $this->dinheiro;
        }

        function set_dinheiro($dinheiro){
            $this->dinheiro = $dinheiro;
        }
    }

    $Cliente1 = new Cliente('Enzo', '553028428-07', 'R$2500000');

    $Cliente1->set_nome('Gabriel');
    $Cliente1->set_cpf('4445095904209');
    $Cliente1->set_dinheiro('R$2000');

    print $Cliente1->get_nome() . "\n";
    print $Cliente1->get_cpf() . "\n";
    print $Cliente1->get_dinheiro();

?>