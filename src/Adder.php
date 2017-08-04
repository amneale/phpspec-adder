<?php

namespace Adder;

class Adder
{
    /**
     * @param int[] ...$integers
     *
     * @return int
     */
    public function add(int ...$integers): int
    {
        return array_sum($integers);
    }
}
