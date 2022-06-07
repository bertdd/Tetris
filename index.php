<html>
<head>
    <link href="tetris.css" rel="stylesheet" />
</head>
<body>
    <h1>PHPetris</h1>
    <?php
    require 'Board.class.php';
    require 'Tetris.class.php';

    session_start();
    $tetris = new Tetris();

    $board = isset($_SESSION["board"]) ?  $_SESSION["board"] : new Board(10, 20);
    $_SESSION["board"] = $board;

    if (count($_GET) > 0)
    {
        $col = intval($_GET["col"]);
        if ($col >= 0 && $col <= 9)
        {
            $board->Throw($col);
            $board->CheckBottomRow();
        }
    }

    print "<table class='main'>";
    print '<tr>';
    print '<td>';
    $board->DrawGrid();
    print '</td>';

    print "<td style='width: 200px'>";
    $tetris->DrawBlocks();
    print '</td>';
    print '</tr>';
    print '</table>';
    ?>
</body>
</html>






