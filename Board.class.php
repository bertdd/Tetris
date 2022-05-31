<?php

class Board
{
    private int $width;

    private int $height;

    private array $cells;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
        $this->initialize();
    }

    private function initialize() : void
    {
        $this->cells = [];
        for ($y = 0; $y < $this->height; $y++)
        {
            $row = [];
            for ($x = 0; $x < $this->width; $x++)
            {
                $row[] = false;
            }
            $this->cells[] = $row;
        }
    }

    public function DrawGrid() : void
    {
        echo  '<table>';
        for ($y = 0; $y < $this->height; $y++)
        {
            echo '<tr>';
            for ($x = 0; $x < $this->width; $x++)
            {
                $css = $this->cells[$y][$x] ? 'full' : 'empty';
                if ($y > 0)
                {
                    echo "<td class='$css'>&nbsp;</td>";
                }
                else
                {
                    echo "<td class='$css' align='center'><a href='index.php?col=$x'>&nbsp;$x&nbsp;</a></td>";
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    public function Throw(int $column) : void
    {
        $last = count($this->cells) - 1;

        while ($this->cells[$last][$column] && $last >= 0)
        {
            $last--;
        }

        if ($last >= 0)
        {
            $this->cells[$last][$column] = true;
        }
    }
}
?>