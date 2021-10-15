<?php
namespace Wcs;

Class Hello
{
    private string $talk = 'Hello World !';

    public function __toString()
    {
        return $this->talk;
    }
}