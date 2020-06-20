<?php

function wypiszTest($tekst, $ile) {
    echo $ile.' - '.$tekst.'<br/>';

    if ($ile > 0) {
        wypiszTekst($tekst, $ile - 1);
    }
}

wypiszTest('Hey', 30);