<?php

namespace Sumityadav\Icici;

trait Arrayable
{
    public function toArray()
    {
        return get_object_vars($this);
    }
}
