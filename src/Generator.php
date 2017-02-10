<?php

namespace YAMLFixtures;

use Trappar\AliceGenerator\FixtureGeneratorBuilder;
use Trappar\AliceGenerator\FixtureGenerationContext;

class Generator
{
    /**
     * Uses Alice Generator to Generate a YAML file from an Object
     *
     * @param object $object The object to parse
     *
     * @return true
     */
    function generate($object)
    {
        try {
            $string = $this->objToYAMLString($object);
        } catch {
            throw new Exception('Unable to create YAML file');
        }
    }

    /**
     * Parse object to Yaml String
     *
     * @param object $object The object to parse
     *
     * @return string
     */
    private function objToYAMLString($object)
    {
        return FixtureGeneratorBuilder::create()->build()->generateYaml(
            $object,
            FixtureGenerationContext::create()->setMaximumRecursion(0)
        );
    }
}
