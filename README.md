# yaml-fixtures
Create PHP fixture objects from yaml files for tests so your team can have consistent test data.

## Install 
@TODO

## Usage (using phpspec)
Presuming you have a ```/fixtures/<your_class>.yml``` in your project root (with the composer.json and spec folders) that looks like this: 
```
example:
  example-1:
    name: Test
    id: 1
```

Then in your spec simply call build and it will create a object with all the attributes and data from your yaml file for you to test with.

```
<?php

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TestCaseSpec extends ObjectBehavior
{
  function it_creates_a_test()
  {
    $someObject = YAMLFixtures\Fixtures::build('example');
   
    $this->generate($someObject)->shouldReturn(null);
  }
}

```
