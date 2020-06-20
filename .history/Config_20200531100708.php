<?php
function silnia($n)
{
  if($n > 0)
  {
    '<script>console.log('.'$n'.')</script>';
     return $n * silnia($n - 1);
     
  }
  return 1;
} // end silnia();

echo silnia(6);