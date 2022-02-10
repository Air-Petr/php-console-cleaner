<?php

namespace AirPetr;

class ConsoleCleaner
{
    /**
     * @param int $numberOfLines
     * @return void
     */
    public function clean(int $numberOfLines): void
    {
        echo $this->getEscChr() . "[0G";
        echo $this->getEscChr() . "[" . $numberOfLines . "A";
        echo $this->getEscChr() . "[0J";
    }

    /**
     * @return string
     */
    public function getEscChr(): string
    {
        return chr(27);
    }
}