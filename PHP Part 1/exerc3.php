<?php
    function celsiusToFahrenheit($celsius)
    {
        $fahrenheit = ($celsius * (9/5)) + 32;
        return $fahrenheit . " graus fahrenheit";
    }

    echo celsiusToFahrenheit(44);
?>