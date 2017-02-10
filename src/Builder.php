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
        $this->className = $className;
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

    /**
     * Get attributes from yaml array
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->parseYAML()[$this->className][$this->className . '-1'];
    }


    /**
     * Builds the base class object
     *
     * @return object
     */
    public function build()
    {
        $standardClass = new \stdClass();
        $array = $this->getAttributes();
        $this->recursiveBuild($array, $standardClass);
        return $this->recursiveBuild($array, $standardClass);
    }

    /**
     * Recursively Builds base class object by looping through the attributes array
     *
     * @param array  $arr array to convert
     * @param object $obj obj to return
     *
     * @return object
     */
    public function recursiveBuild($arr, $obj)
    {
        foreach ($arr as $key => $value) {
            $obj->$key = $value;
        }
        return $obj;
    }
}
