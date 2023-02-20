<?php

namespace Helper;

class InputHelper
{
    static function Input(string $pilih)
    {
        echo "$pilih : ";
        $result = fgets(STDIN);
        return trim($result);
    }
}
