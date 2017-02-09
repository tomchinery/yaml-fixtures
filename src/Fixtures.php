<?php

namespace YAMLFixtures;

class Fixtures
{
    /**
     * Generates a YAML file from an Object
     *
     * @param object $object The object to parse
     *
     * @return true
     */
    function generate($object)
    {
        try {
            $fixtureGenerator = new Generator();
            $fixtureGenerator->generate($object);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
}
