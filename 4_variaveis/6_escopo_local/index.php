<?php

  # Local: variável declarada em uma função;

  
  $x = 10;

  echo "$x global <br>";

  function teste() {

    $x = 5;

    echo "$x local <br>";

  }

  teste();
  echo "$x global <br>";
  teste();

  function testando() {
    
    $x = 12;

    echo "$x local <br>";
  }

  $x = 99;

  testando();
  teste();
  echo "$x global <br>";


