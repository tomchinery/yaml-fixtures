<?php

namespace spec\YAMLFixtures;

use YAMLFixtures\Fixtures;
use YAMLFixtures\Generator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use \stdClass;

class FixturesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Fixtures::class);
    }

    function it_generates_a_yaml_fixture(Generator $generator)
    {
        $object = new \stdClass();
        $object->name = 'Test';

        $generator->generate()->shouldBeCalled();
        $generator->generate()->willReturn(true);

        $this->generate($object, $generator);
    }
}
