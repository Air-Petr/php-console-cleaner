<?php

namespace AirPetr;

class ConsoleCleaner
{
    public function clean(int $numberOfLines): void
    {
        echo chr(27) . "[0G";
        echo chr(27) . "[" . $numberOfLines . "A";
        echo chr(27) . "[0J";
    }
}