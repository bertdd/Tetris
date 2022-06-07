<?php
require_once 'shape.class.php';

class Long extends Shape
{
    public function __construct()
    {
        $this->Color = "Lightgreen";

        $this->Blocks = [];
        $row = [];
        $row[0] = true;
        $row[1] = true;
        $row[2] = true;
        $row[3] = true;
        $this->Blocks[0] = $row;
    }
}