<?php

require 'Square.class.php';
require 'Long.class.php';
require 'Tee.class.php';

class Tetris
{
    public function __construct()
    {
        $this->blocks = [new Long(), new Square(), new Tee()];
    }

    public function DrawBlocks()
    {
        foreach ($this->blocks as $block)
        {
            $block->Draw(); 
        }
    }

    private array $blocks;
}