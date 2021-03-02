<?php
    function average()
    {
        $sum = 0;
        $average = 0;
        $qntArgs = func_num_args();
        $params = func_get_args();

        for($i=0; $i<$qntArgs; $i++){
            $sum+= $params[$i];
        }

        $average+= $sum/$qntArgs;
        return $average;
    }
    echo average(15, 5, 5);
?>