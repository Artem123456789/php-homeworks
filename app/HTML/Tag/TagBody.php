<?php

namespace HTML\Tag;

class TagBody
{

    protected  $body;

    public function __construct()
    {
        $this->clear();
    }

    function clear(){
        $this->body = [];
    }

    function apppend($value){
        $this->body[] = $value;
    }

    function  prepend($value){
        array_shift($this->body, $value);
    }

    function __toString()
    {
        return implode($this->body);
    }
}