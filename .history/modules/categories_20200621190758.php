<?php

function checkSubmit() {
    if($_SESSION['POST']) {
      echo 'Posted';
    }
  }