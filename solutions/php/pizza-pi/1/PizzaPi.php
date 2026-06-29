<?php

class PizzaPi
{
    public function calculateDoughRequirement($a, $b)
    {
        $totalPizzas = $a;
        $persons = $b;
        return $totalPizzas * (($persons * 20) + 200);
    }

    public function calculateSauceRequirement($a, $b) : int
    {
        $totalSauce = $a * 125;
        return $totalSauce / $b;
    }

    public function calculateCheeseCubeCoverage($a, $b, $c) : int
    {
        return $a**3 / ($b * M_PI * $c);
        
    }

    public function calculateLeftOverSlices($a, $b) : int
    {
        $totalSlicesOfPizza = $a * 8;
        return $totalSlicesOfPizza % $b;
    }
}
