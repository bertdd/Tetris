<?php

abstract class Shape
{
    public string $Color;

    public array $Blocks;

    public function Draw() : void
    {
        print "<table class='shape'>";
        foreach ($this->Blocks as $row)
        {
            print "<tr>";
            foreach ($row as $col)
            {
                $css = $col ? "shapeFull" : "shapeEmpty";
                $color = $col ? "style='background: $this->Color;'" : "";
                print "<td class='$css' $color>&nbsp;</td>";
            }
            print "</tr>";
        }
        print "</table>";
    }
}