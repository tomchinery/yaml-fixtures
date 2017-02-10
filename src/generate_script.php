<?php

namespace YAMLFixtures;

use YAMLFixtures\Generator;
use \stdClass;

$testObject = new \stdClass();
$testObject->name = "Tom";

$fixtures = new Generator($testObject);
$fixtures->generate();