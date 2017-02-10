<?php

namespace spec\YAMLFixtures;

use YAMLFixtures\Generator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GeneratorSpec extends ObjectBehavior
{
    function it_is_initializable($object)
    {
        $this->beConstructedWith($object);
        $this->shouldHaveType(Generator::class);
    }
}
