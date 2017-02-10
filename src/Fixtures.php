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
}
