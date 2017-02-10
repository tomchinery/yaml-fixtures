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
        
    }

    function it_finds_the_correct_path()
    {
        
    }

    function it_creates_base_class_object()
    {

    }

    function it_adds_attributes_to_base_class_object()
    {

    }
}
