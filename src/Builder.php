<?php

namespace YAMLFixtures;

use Symfony\Component\Yaml\Yaml;

class Builder
{
    /**
     * Constructs the class
     *
     * @param string $className Name of the class to build
     *
     * @return mixed
     */
    function __construct($className)
    {
        $this->path = realpath('./') . '/fixtures/' . $className . '.yml';
    }

    /**
     * Parses YAML files to array
     *
     * @return array
     */
    public function parseYAML()
    {
        return Yaml::parse(file_get_contents($this->path));
    }
}
