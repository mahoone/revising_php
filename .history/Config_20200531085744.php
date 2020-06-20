<?php

function randomNumber($value) {
    echo func_get_args($value);
}

randomNumber(1, 3, 4, 10);