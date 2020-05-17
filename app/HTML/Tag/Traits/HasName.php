<?php


namespace HTML\Tag\Traits;

use HTML\Tag\TagName;

trait HasName
{
    protected $name;

    protected function nameInit($name)
    {
        $this->name = new TagName($name);
    }

    public function name()
    {
        return $this->name;
    }

    function isSelfClosing() {
        return $this->name()->isSelfClosing();
    }
}