<?php


class Node
{
    public $value;
    public $next;
    public function __construct($data)
    {
        $this->value = $data;
        $this->next = null;
    }

    public function getValue()
    {
        return $this->value;
    }
}