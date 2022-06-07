<?php

require_once 'Shape.class.php';

class Square extends Shape
{
    public function __construct()
    {
        $this->Color = "Yellow";

        $this->Blocks = [];
        $row = [];
        $row[0] = true;
        $row[1] = true;
        $this->Blocks[0] = $row;
        $this->Blocks[1] = $row;
    }
}