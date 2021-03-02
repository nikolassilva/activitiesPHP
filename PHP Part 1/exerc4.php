<?php
    function metersToCentimeters($meters)
    {
        $centimeters = $meters * 100;
        return $centimeters . " centímetros";
    }

    echo metersToCentimeters(45);
?>