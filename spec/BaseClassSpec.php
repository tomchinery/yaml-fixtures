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

    function it_allows_method_assignment_on_instance()
    {
        $this->addMethod('testSum',
                         function ($num1, $num2) {
                             return $num1 + $num2;
                         }
        );
        $this->testSum(2,2)->shouldReturn(4);
    }

    function it_allows_property_assignment_on_instance()
    {
        $this->addProperty('isAvailable', true);
        //        print_r($this->isAvailable, true);
    }
}
