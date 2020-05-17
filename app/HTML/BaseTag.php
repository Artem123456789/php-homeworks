<?php

namespace HTML;

use HTML\Tag\TagAttributes;
use HTML\Tag\TagBody;
use HTML\Tag\TagName;
use HTML\Tag\Traits\HasAttributes;
use HTML\Tag\Traits\HasBody;
use HTML\Tag\Traits\HasName;

abstract class BaseTag
{

    use HasName, HasAttributes, HasBody;

    public function __construct(string $name)
    {
        $this->nameInit($name);
        $this->attributesInit();
        $this->bodyInit();
    }

    //region NAME METHODS

    //endregion

    //region BODY METHODS

    //endregion

    //region ATTRIBUTES METHODS

    //endregion

    //region GENERATING METHODS
    function start(): string
    {

        $str = "<{$this->name()}{$this->attributes()}";

        if ($this->isSelfClosing())
            $str .= " /";

        return "$str>";
    }

    function end(): string
    {

        if ($this->isSelfClosing())
            return '';

        return "</{$this->name()}>";
    }

    function classExists(string $className): bool
    {
        return strpos($this->attributes->get("class"), $className);
    }

    function addClass(string $className)
    {
        if (!$this->classExists($className)) {
            if ($this->attributes->get("class") != null)
                $this->attributes->append("class", ' ' . $className);
            else
                $this->attributes->append("class", $className);
        }
    }

    function removeClass($className)
    {
        if (($this->attributes->get("class") != null) && $this->classExists($className)) {
            $this->attributes->set("class",
                str_replace($className, "", $this->attributes->get("class")));
            if ($this->attributes->get("class")[0] == ' ') {
                $this->attributes->set("class",
                    substr(
                        $this->attributes->get("class"),
                        2,
                        strlen($this->attributes->get("class"))
                    ));
            } else if ($this->attributes->get("class")[strlen($this->attributes->get("class")) - 1] == ' ')
                $this->attributes->set("class",
                    substr(
                        $this->attributes->get("class"),
                        0,
                        strlen($this->attributes->get("class")) - 1));
        }
    }

    function __toString(): string
    {
        $body = $this->isSelfClosing() ? '' : $this->getBody();
        return $this->start() . $body . $this->end();
    }

    function __get($name)
    {
        return $this->getAttribute($name);
    }

    function __set($name, $value)
    {
        $this->setAttribute($name, $value);
    }

    //endregion

    function appendTo(BaseTag $tag)
    {
        $tag->appendBody($this);
        return $this;
    }

    function prependTo(BaseTag $tag)
    {
        $tag->prependBody($this);
        return $this;
    }

}
