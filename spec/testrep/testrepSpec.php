<?php

namespace spec\testrep;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class testrepSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('testrep\testrep');
    }
}
