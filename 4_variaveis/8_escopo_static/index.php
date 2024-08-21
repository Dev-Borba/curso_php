<?php

  # Static: variável declarada dentro da funçao, porém o seu valor permanece salvo entre chamadas da função;

  function teste() {
    
    $a = 0;
    $a++;

    echo "$a <br>";

  }
  teste();
  teste();
  teste();

  function testeStatic() {
    
    static $a = 0;
    $a++;

    echo "$a <br>";
    
  }
  testeStatic();
  testeStatic();
  testeStatic();
