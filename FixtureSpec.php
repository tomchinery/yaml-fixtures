<?php

namespace spec\YAMLFixtures;

use YAMLFixtures\BaseClass;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BaseClassSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BaseClass::class);
    }
}
