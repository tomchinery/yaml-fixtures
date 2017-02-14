<?php

namespace YAMLFixtures;

class BaseClass
{
    protected $methods = array();
    protected $properties = array();

    /**
     * Magic get method to get this classes properties
     *
     * @param string $name The name of the property
     *
     * @return mixed
     */
    public function __get($name)
    {
        if (in_array($this->properties[$name], $this->properties)) {
            return $this->properties[$name];
        }
    }

    /**
     * Magic call method to call this classes methods
     *
     * @param string  $name      The name of the method
     * @param Closure $arguments The arguments passed in
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if (!empty($this->methods[$name]) && is_callable($this->methods[$name])) {
            return call_user_func_array($this->methods[$name], $arguments);
        }
    }

    /**
     * Adds method to this instance of class
     *
     * @param string  $name   The name of the method
     * @param Closure $method The method itsel
     *
     * @return mixed
     */
    public function addMethod($name, $method)
    {
        $this->methods[$name] = $method;
    }

    /**
     * Adds property to this instance of class
     *
     * @param string $name  The name of the property
     * @param mixed  $value The value of the property
     *
     * @return mixed
     */
    public function addProperty($name, $value)
    {
        $this->properties[$name] = $value;
    }
}
