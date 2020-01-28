<?php

namespace spec\App;

use App\Finobacci;
use PhpSpec\ObjectBehavior;

class FinobacciSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Finobacci::class);
    }

    function it_returns_0_from_a_Finobacci_of_0()
    {
        $this->finobacci(0)->shouldReturn(0);
    }

    function it_returns_1_from_a_Finobacci_of_1()
    {
        $this->finobacci(1)->shouldReturn(1);
    }

    function it_returns_13_from_a_Finobacci_of_7()
    {
        $this->finobacci(7)->shouldReturn(13);
    }
}
