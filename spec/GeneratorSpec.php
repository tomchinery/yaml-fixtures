<?php

namespace spec\YAMLFixtures;

use YAMLFixtures\Generator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GeneratorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Generator::class);
    }
}
