<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return trim($name)[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($name[0]) . ".";
    }

    public function initials(string $name): string
    {
        $words = explode(" ", $name);
        $result = "";

        foreach ($words as $word) {
            $result .= $word[0] . ". ";
        }

        $result = trim($result);
        return $result;
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $first = $this->initials($sweetheart_a);
        $second = $this->initials($sweetheart_b);
        $heart = <<<HEART
                 ******       ******
               **      **   **      **
             **         ** **         **
            **            *            **
            **                         **
            **     $first  +  $second     **
             **                       **
               **                   **
                 **               **
                   **           **
                     **       **
                       **   **
                         ***
                          *
            HEART;
        return $heart;
    }
}
