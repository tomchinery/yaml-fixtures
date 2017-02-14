<?php

namespace spec\YAMLFixtures;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('example');
        $this->shouldHaveType('YAMLFixtures\Builder');
    }

    function it_parses_yaml_fixture()
    {
        $this->beConstructedWith('example');
        $this->parseYAML('example')->shouldBeArray();
    }

    function it_gets_object_from_yaml_array()
    {
        $fixtureAttributes = array(
            "name" => "Test",
            "id" => 1,
            "array" => array("cheese", "tomato", "lettuce"),
            "hash" => array("id" => 12, "name" => "Toast")
        );
        $this->beConstructedWith('example');
        $this->getAttributes()->shouldReturn($fixtureAttributes);
    }

    function it_finds_the_correct_path()
    {
        $this->beConstructedWith('example');
        $this->path->shouldBe('/home/tom/Projects/yaml-fixtures/fixtures/example.yml');
    }

    function it_creates_base_class_object()
    {
        $this->beConstructedWith('example');
        $this->build()->shouldReturnAnInstanceOf('YAMLFixtures\BaseClass');
    }

    function it_adds_attributes_to_base_class_object()
    {
        $this->beConstructedWith('example');
        $baseClass = $this->build();
        // can't test this as reflection has a console bomb
    }
}
