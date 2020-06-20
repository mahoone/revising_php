<?php
$plik = file('test.txt');

echo '<ul>';

for($i = 0, $x = count($plik); $i < $x; $i++)
{
    echo '<li>'.trim($plik[$i]).'</li>';
}

echo '</ul>';