<?php

namespace YAMLFixtures;

use Trappar\AliceGenerator\FixtureGeneratorBuilder;
use Trappar\AliceGenerator\FixtureGenerationContext;

class Generator
{
    /**
     * Construct the class
     *
     * @param object $object The object to parse to yaml
     *
     * @return true
     */
    function __construct($object)
    {
        $this->object = $object;
    }

    /**
     * Uses Alice Generator to Generate a YAML file from an Object
     *
     * @return true
     */
    function generate()
    {
        if (file_put_contents($this->filePath(), $this->objToYAMLString())) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Parse object to Yaml String
     *
     * @return string
     */
    private function objToYAMLString()
    {
        return FixtureGeneratorBuilder::create()->build()->generateYaml(
            $this->object,
            FixtureGenerationContext::create()->setMaximumRecursion(0)
        );
    }

    /**
     * Generate file path
     *
     * @return string
     */
    private function filePath()
    {
        return realpath('../../../') . '/fixtures/' . get_class($this->object) . '.yml';
    }
}
