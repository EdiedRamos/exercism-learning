<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $persons)
    {
        return $pizzas * (($persons * 20) + 200);
    }

    public function calculateSauceRequirement($pizzas, $sauceCanVolume)
    {
        return $pizzas * (125 / $sauceCanVolume);
    }

    public function calculateCheeseCubeCoverage($sideLength, $thickness, $diameter)
    {
        return floor(pow($sideLength, 3) / ($thickness * M_PI * $diameter));
    }

    public function calculateLeftOverSlices($pizzas, $friends)
    {
        return $pizzas * 8 % $friends;
    }
}
