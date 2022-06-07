<?php

require_once 'shape.class.php';

class El extends Shape
{
    public function __construct()
    {
        $this->Color = "LightBlue";

        $this->Blocks = [];

        $row = [];
        $row[0] = true;
        $row[1] = true;
        $row[2] = true;
        $this->Blocks [] = $row;

        $row = [];
        $row[0] = false;
        $row[1] = false;
        $row[2] = true;
        $this->Blocks [] = $row;
    }
}