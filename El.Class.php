<?php

require_once 'shape.class.php';

class El extends Shape
{
    public function __construct()
    {
        $this->Color = "DarkBlue";

        $this->Blocks = [
                          [true,  true,  true],
                          [false, false, true]
                        ];

    }
}