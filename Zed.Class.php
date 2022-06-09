<?php
require_once 'shape.class.php';

class Zed extends Shape
{
    public function __construct()
    {
        $this->Color = "Pink";

        $this->Blocks = [
              [true,  true, false],
              [false, true,  true]
            ];
    }
}
?>