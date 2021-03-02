<?php
    function checkTriangle($l1, $l2, $l3)
    {
        if((($l1 + $l2) > $l3 || ($l2 + $l3) > $l1 || ($l1 + $l3) > $l2) && 
        $l1 > 0 && $l2 > 0 && $l3 > 0){
            if($l1 == $l2 && $l2 == $l3){
                return "Triângulo equilátero";
            }
            elseif($l1 == $l2 || $l2 == $l3 || $l1 == $l3){
                return "Triângulo isósceles";
            }
            elseif($l1 != $l2 && $l2 != $l3){
                return "Triângulo escaleno";
            }
        }
        else{
            return "Não pode ser um triângulo!";
        }
    }

    echo checkTriangle(5, 5, 5);
?>