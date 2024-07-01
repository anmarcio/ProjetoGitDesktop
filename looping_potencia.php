<?php

 function potencia($numero, $elevado) {
    
    $resultado = $numero;
    for ($i = 1; $i < $elevado; $i++) {
        $resultado = $resultado * $numero;
    }
    return $resultado;    
 }

 echo potencia(2, 5);

?>