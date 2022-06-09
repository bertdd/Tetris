<?php

require_once 'shape.class.php';

class Tee extends Shape
{
    public function __construct()
    {
        $this->Color = "Purple";

        $this->Blocks = [
                          [true,  true, true ],
                          [false, true, false]
                        ];
    }
}