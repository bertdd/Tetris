<?php

require_once 'Shape.class.php';

class Square extends Shape
{
    public function __construct()
    {
        $this->Color = "Yellow";

        $this->Blocks = [
                          [true, true],
                          [true, true]
                        ];
    }
}