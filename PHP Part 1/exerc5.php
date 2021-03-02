<?php
    function printBiggerAndSmaller()
    {
        $params = func_get_args();

        echo 'Maior: ' . max($params);
        echo ', Menor: ' . min($params);
    }

    printBiggerAndSmaller(44, 110, 22, 1, 1100, 76);
?>