<?php

require 'Square.class.php';
require 'Long.class.php';
require 'Tee.class.php';
require 'Zed.class.php';
require 'El.class.php';

class Tetris
{
    public function __construct()
    {
        $this->blocks = [new Long(), new Square(), new Tee(), new Zed(), new El()];
    }

    public function DrawBlocks()
    {
        foreach ($this->blocks as $block)
        {
            print "<div class='sample'>";
            $block->Draw();
            print "</div>";
        }
    }

    private array $blocks;
}