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
            foreach ($row as $column)
            {
                $css = $column ? "shapeFull" : "shapeEmpty";
                $color = $column ? "style='background: $this->Color;'" : "";
                $link = $column ? "<a href='index.php?color=$this->Color'>&nbsp;</a>" : "&nbsp;";
                print "<td class='$css' $color>$link</td>";
            }
            print "</tr>";
        }
        print "</table>";
    }
}
