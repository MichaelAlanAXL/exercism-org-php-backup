<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {        
        $digito1 = implode($digitsOfNumber1);
        $digito2 = implode($digitsOfNumber2);
        
        return (int)$digito1 + (int)$digito2;
    }

    public function isPalindrome(int $number): bool
    {
        $stringNumber = (string)$number;
        $stringNumberReverted = strrev($stringNumber);
        $numberAgain = (int)$stringNumberReverted;
        if ($number === $numberAgain) {
            return true;
        } else {
            return false;
        }
        
    }

    public function validate(string $input): string
    {        
        $input = trim($input);
        
        if ($input === '') {
            return 'Required field';
        } 
        
        if (preg_match('/^0[0-7]+/', $input, $matches)) {
            return '';
        }
        
        if (!is_numeric($input) || (int)$input <= 0) {
            return 'Must be a whole number larger than 0';
        }

        return '';
    }
}
