<?php


trait ForwardCallTrait
{
    public function forwardCallTo($object, $method, $params)
    {
        return $object->$method($params);
    }
}