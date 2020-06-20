<?php

function wypiszTekst($tekst, $ile) {
    echo $ile.' - '.$tekst.'<br/>';

    if ($ile > 0) {
        wypiszTekst($tekst, $ile - 1);
    }
}

wypiszTekst('Hey', 200);