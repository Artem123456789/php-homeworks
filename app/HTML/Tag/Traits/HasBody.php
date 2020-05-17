<?php


namespace HTML\Tag\Traits;


use HTML\Tag;
use HTML\Tag\TagBody;

trait HasBody
{

    protected $body;

    protected function bodyInit()
    {
        $this->setBody(new TagBody());
    }

    function getBody(): TagBody{
        return $this->body;
    }

    function setBody(TagBody $body){
        $this->body = $body;
    }

    function appendBody($value)
    {
        $this->body->apppend($value);
        return $this;
    }

    function prependBody($value)
    {
        $this->body->prepend($value);
        return $this;
    }
}