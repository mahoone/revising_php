
<?php
	$date = '12 Dec 2006, 16:34';

if(preg_match('/^(\d{1,2}) (Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec) (\d{4})\, (\d{1,2})\:(\d{1,2})/', $date, $found))
{
    // Co nam zwrocilo...
    echo '<h3>Dane: "'.$date.'"</h3>';
    echo '<p>Dzien: '.$found[1].'</p>';
    echo '<p>Miesiac: '.$found[2].'</p>';
    echo '<p>Rok: '.$found[3].'</p>';
    echo '<p>Godzina: '.$found[4].'</p>';
    echo '<p>Minuta: '.$found[5].'</p>';

    $monthConverter = array('Jan' => 1, 'Feb' => 2, 'Mar' => 3, 'Apr' => 4, 'May' => 5,
        'Jun' => 6, 'Jul' => 7, 'Aug' => 8, 'Sep' => 9, 'Oct' => 10, 'Nov' => 11, 'Dec' => 12);

    echo '<p>Unix timestamp: '.mktime($found[4], $found[5], 0, $monthConverter[$found[2]], $found[1], $found[3]).'</p>';
}
else
{
    echo '<p>Nieprawidłowy format daty!</p>';
}

?>