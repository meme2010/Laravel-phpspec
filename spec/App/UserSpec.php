<?php

namespace spec\App;

use App\User;
use PhpSpec\ObjectBehavior;

class UserSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType(User::class);
    }

    function it_can_add_two_numbers()
    {
        $this->add(2,3)->shouldReturn(5);
    }


}
