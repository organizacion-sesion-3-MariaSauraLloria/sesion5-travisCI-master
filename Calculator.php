<?php
class Calculator
{
 
    public function add($a, $b): float
    {
        return $a + $b;
    }

    public function multiply($a, $b): float
    {
        return $a * $b;
    }

    public function division($a, $b): float
    {
        return $a / $b;
    }
    public function esPar($a)
    {

        if ($a === "") {
            return false;
        } elseif (!is_numeric($a)) {
            return false;
        } elseif (floor($a / 2) * 2 == $a) {
            return true;
        } else {
            return false;
        }
    }
 
}
