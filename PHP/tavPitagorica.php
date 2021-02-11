<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tavola Pitagorica</title>
        <style>
            table, tr{
                border: 2px solid black;
            }
        </style>
    </head>
    <body>
    <h1>Tabella PHP</h1>
    <table>
    <?php
        for($i=1; $i <= 10; $i++)
        {
            echo '<tr>';
            for($j=1; $j <= 10; $j++)
            {
                echo '<td align="right">' . ($i*$j) . '</td>';
            }
            echo '</tr>';
        }
    ?>
    </table>     
    </body>
</html>