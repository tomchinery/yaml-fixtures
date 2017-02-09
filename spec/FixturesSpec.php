<?php

namespace spec\YAMLFixtures;

use YAMLFixtures\Fixtures;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FixturesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Fixtures::class);
    }

    function it_generates_a_yaml_fixture()
    {
        $this->generate('path-to-file')->shouldReturn(true);
    }
}
