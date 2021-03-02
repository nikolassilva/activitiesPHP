<?php
function checkCPF($cpf)
{
    /*se o número de caracteres for diferente de 11 ou
      todos os caracteres forem repetidos, retorna false
    */ 
    if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {
        return false;
    }

    $indexesForLoop = [9, 10];

    foreach ($indexesForLoop as $index) {
        $sum = 0;
        $multiplier = $index + 1;

        for ($i = 0; $i < $index; $i++) {
            $sum += $cpf[$i] * ($multiplier--);
        }

        $restResult = (($sum * 10) % 11);

        if ($cpf[$index] != $restResult) {
            return false;
        }
    }
    return true;
}

echo checkCPF("12060055644");