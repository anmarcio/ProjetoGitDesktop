<?php

 function potencia($numero, $elevado) {
    
    $resultado = $numero;
    for ($i = 1; $i < $elevado; $i++) {
        $resultado = $resultado * $numero;
    }
    return $resultado;    
 }
 //Fazendo os testes 
 echo potencia(2, 5);

?>