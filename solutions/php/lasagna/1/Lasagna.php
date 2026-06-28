<?php

class Lasagna
{
    public function expectedCookTime():int
    {
        // Implement the expectedCookTime method
        $startTime = 40;
        return $startTime;
    }

    public function remainingCookTime($elapsed_minutes) : int
    {
        // Implement the remainingCookTime method        
        return $this->expectedCookTime() - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        // Implement the totalPreparationTime method
        return $layers_to_prep * 2;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        // Implement the totalElapsedTime method
        return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    public function alarm()
    {
        // Implement the alarm method
        $alert = "Ding!";
        return $alert;
    }
}
