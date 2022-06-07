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

    private function NewRow() : array
    {
        $row = [];
        for ($x = 0; $x < $this->width; $x++)
        {
            $row[] = false;
        }
        return $row;
    }

    private function initialize() : void
    {
        $this->cells = [];
        for ($y = 0; $y < $this->height; $y++)
        {
            $this->cells[] = $this->NewRow();
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

    public function CheckBottomRow() : void
    {
        if ($this->BottomRowFull())
        {
            $this->ClearLastRow();
        }
    }

    private function ClearLastRow() : void
    {
        $lastRow = $this->height - 1;
        for ($y = $lastRow; $y > 0; $y--)
        {
            $this->cells[$y] = $this->cells[$y - 1];
        }

        $this->cells[0] = $this->NewRow();
    }

    private function BottomRowFull() : bool
    {
        $lastRow = $this->height - 1;
        $full = true;
        for ($x = 0; $x < $this->width; $x++)
        {
            if ($this->cells[$lastRow][$x] == false)
            {
                $full = false;
                break;
            }
        }
        return $full;
    }
}
?>