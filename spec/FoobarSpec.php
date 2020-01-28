<?php

namespace spec\App;

use App\Foobar;
use PhpSpec\ObjectBehavior;

class FoobarSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Foobar::class);
    }

    function its_returns_foo_if_its_divisible_by_3()
    {
        $this->foo( 3)->shouldReturn("foo");
    }


    function its_returns_bar_if_its_divisible_by_5()
    {
        $this->bar( 5)->shouldReturn("bar");
    }

    function its_returns_foobar_if_its_divisible_by_15()
    {
        $this->foobar( 15)->shouldReturn("foobar");
    }


}
