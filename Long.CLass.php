<?php
require_once 'shape.class.php';

class Long extends Shape
{
    public function __construct()
    {
        $this->Color = "Lightgreen";

        $this->Blocks = [
                          [true, true, true, true]
                        ];
    }
}