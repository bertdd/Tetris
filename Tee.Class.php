<?php

require_once 'shape.class.php';

class Tee extends Shape
{
    public function __construct()
    {
        $this->Color = "Purple";

        $this->Blocks = [];
        $row = [];

        $row[0] = true;
        $row[1] = true;
        $row[2] = true;
        $this->Blocks[0] = $row;

        $row = [];
        $row[0] = false;
        $row[1] = true;
        $row[2] = false;
        $this->Blocks[1] = $row;
    }
}