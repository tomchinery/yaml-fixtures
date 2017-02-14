<?php

namespace spec\YAMLFixtures;

use YAMLFixtures\Fixtures;
use YAMLFixtures\Generator;
use YAMLFixtures\BaseClass;
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

    function it_returns_a_object_with_attributes()
    {
        $object = new BaseClass();
        $object->name = "Test";
        $object->id = 1;
        $object->array = array("cheese", "tomato", "lettuce");
        $object->hash = array("id" => 12, "name" => "Toast");

        $this::build('example')->shouldReturnAnInstanceOf('YAMLFixtures\BaseClass');
        $this::build('example')->shouldBeLike($object);
    }
}
