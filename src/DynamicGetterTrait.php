<?php

namespace Mazzcris\OoStripePhp;

trait DynamicGetterTrait
{
    public function __call($name, $arguments)
    {
        if (str_starts_with($name, 'get')) {
            $property = $this->camelToSnake(lcfirst(substr($name, 3)));



            if (!$this->offsetExists($property)) {
                throw new \BadMethodCallException("Method {$name} does not exist");
            }

            return $this->transformProperty($this->$property);
        }

        throw new \BadMethodCallException("Method {$name} is not valid");
    }

    private function camelToSnake($string): string
    {
        return strtolower(preg_replace('/[A-Z]/', '_$0', $string));
    }

    private function transformProperty($value)
    {
        // Convert Unix timestamp to DateTime
        if (is_int($value) && strlen((string)$value) === 10) {
            return (new \DateTime())->setTimestamp($value);
        }

        return $value;
    }
}
