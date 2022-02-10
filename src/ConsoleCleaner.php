<?php

namespace AirPetr;

class ConsoleCleaner
{
    /**
     * Clean console.
     *
     * Use ANSI Escape Sequences.
     *
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