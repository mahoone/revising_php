<?php

function koloruj()
{
    static $i = 0;

    $i++;
    echo '<script>console.log(`$i`)</script>';

    if($i % 2 == 0)
    {
        return '#fff';
    }
    return '#ccccc';
}

echo '<table width="30%">';
for($x = 0; $x < 10; $x++)
{
   echo '<tr><td bgcolor="'.koloruj().'">'.$x.'</td></tr>';	
}
echo '</table>';