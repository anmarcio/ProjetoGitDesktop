<?php

$notas_dos_alunos = array ('7.4', '1.7', '8.5', '3.5', '4.4', '8.7', '6.4', '8.4', '1.2', '4.3', '9.8', '0.5', '8.2','4.7', '1.1', '3.3', '3.4', '4.8', '8.7', '5.4', '2.2', '3.7', '5.9', '7.4', '4.8', '4.7', '1.5', '8.4', '2.1', '2.7 ');

$aprovados = 0;
$reprovados = 0;

foreach($notas_dos_alunos as $aluno) {
    if ($aluno >= 6) {
        echo "Aprovado <br>";
        $aprovados ++;
    } else {
        echo "Reprovado <br>";
        $reprovados += 1; 
    }
}

echo $aprovados . " Alunos Aprovados. <br> " . $reprovados . " Alunos Reprovados"; 
?>