<?php
assert_options(ASSERT_ACTIVE, 0);
assert_options(ASSERT_WARNING, 1);
 
$zmienna = 3;
 
assert($zmienna == 6);