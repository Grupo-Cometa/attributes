<?php

namespace Cometa;

use stdClass;

class Attributes extends stdClass
{
    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }
        $this->$name = new $this;
        return $this->$name;
    }
}