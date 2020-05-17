<?php


namespace HTML\Tag\Traits;


use HTML\Tag\TagAttributes;

trait HasAttributes
{

    protected $attributes;

    protected function attributesInit()
    {
        $this->attributes = new TagAttributes();
    }

    function attributes() {
        return $this->attributes;
    }

    function setAttribute(string $key, $value) {
        $this->attributes()->$key = $value;
        return $this;
    }

    function getAttribute(string $key) {
        return $this->attributes()->$key ?? null;
    }

    function appendAttribute(string $key, $value) {
        $this->attributes()->append($key, $value);
        return $this;
    }

    function prependAttribute(string $key, $value) {
        $this->attributes()->prepend($key, $value);
        return $this;
    }
}