<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $name = trim($name);
        return substr($name, 0, 1);
    }

    public function initial(string $name): string
    {
        $firstLetter = $this->firstLetter($name) . ".";
        return ucfirst($firstLetter);
    }

    public function initials(string $name): string
    {
        $names = explode(" ", $name);
        $initialsName = [];
        foreach ($names as $value) {
            $initialsName[] = $this->initial($value);
        }
        return implode(" ", $initialsName);        
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $name_a = $this->initials($sweetheart_a);
        $name_b = $this->initials($sweetheart_b);
        return <<<TEXT
                 ******       ******
               **      **   **      **
             **         ** **         **
            **            *            **
            **                         **
            **     {$name_a}  +  {$name_b}     **
             **                       **
               **                   **
                 **               **
                   **           **
                     **       **
                       **   **
                         ***
                          *
            TEXT;
    }
}