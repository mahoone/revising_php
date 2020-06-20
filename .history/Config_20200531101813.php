<?php

function kolorujTekst($tekst)
{
   return '<font color="red">'.$tekst.'</font>';	
}

function pogrubTekst($tekst)
{
   return '<strong>'.$tekst.'</strong>';	
}

kolorujTekst(pogrubTekst('tekst'));