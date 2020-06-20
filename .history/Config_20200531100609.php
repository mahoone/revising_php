<?php
function silnia($n)
{
  if($n > 0)
  {
     return $n * silnia($n - 1);
     '<script>console.log(.'$n'.)</script>'
  }
  return 1;
} // end silnia();

echo silnia(6);