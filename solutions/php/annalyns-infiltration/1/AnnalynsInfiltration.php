<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        return !$is_knight_awake;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return $is_knight_awake || $is_archer_awake || $is_prisoner_awake;
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        if ($is_archer_awake === false && $is_prisoner_awake) {
            return true;
        }
        return false;
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        if ($is_dog_present && !$is_archer_awake) {
            return true;
        }
        if (!$is_dog_present && $is_prisoner_awake && !$is_knight_awake && !$is_archer_awake) {
            return true;
        }
        return false;        
    }
    /* 
    Equivalent shorter version:
        
    return 
        ($is_dog_present && !$is_archer_awake) ||
        (
            !$is_dog_present &&
            $is_prisoner_awake &&
            !$is_knight_awake &&
            !$is_archer_awake            
        );        
    */
}
