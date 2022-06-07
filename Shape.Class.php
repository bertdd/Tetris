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
                print "<td>";
                print $col ? "X" : "&nbsp;";
                print "</td>";
            }
            print "</tr>";
        }
        print "</table>";
    }
}