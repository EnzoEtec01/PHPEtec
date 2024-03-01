<?php

    function calculo_imc($altura, $peso){
        $altura = $altura * $altura;
        $imc = $peso / $altura;
        return $imc;
    }
    
print calculo_imc(1.94,116.00) ."\n";
print calculo_imc(2.20,116.00) . "\n";
print calculo_imc(1.60,116.00) ."\n";
print calculo_imc(1.70,116.00) . "\n";
print calculo_imc(1.75,116.00) . "\n";

?>
