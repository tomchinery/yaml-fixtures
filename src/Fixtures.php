<?php

namespace YAMLFixtures;

class Fixtures
{
    /**
     * Generates a YAML file from an Object
     *
     * @param object $object           The object to parse
     * @param object $fixtureGenerator optional generator to pass
     *
     * @return true
     */
    function generate($object, $fixtureGenerator = null)
    {
        if ($fixtureGenerator == null) {
            $fixtureGenerator = new Generator($object);
        }
        return $fixtureGenerator->generate();
    }

    /**
     * Builds an object with attributes from the yaml
     *
     * @param string $className The name of the class you want to build
     *
     * @return object
     */
    public static function build($className)
    {
        $builder = new Builder($className);
        return $builder->build();
    }
}
