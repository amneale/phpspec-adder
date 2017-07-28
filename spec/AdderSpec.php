<?php

namespace spec\Adder;

use PhpSpec\ObjectBehavior;

class AdderSpec extends ObjectBehavior
{
    function it_adds_two_numbers()
    {
        $this->add(1, 2)->shouldReturn(3);
    }
}
