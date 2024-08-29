<?php

 # Converta os seguintes dados para int com operador de cast;
 # "testando";
 # 12.9;
 # true;
 # [1,2,3];
 # E veja os resultados;

  $a = (int) "testando";
  echo $a . "<br>";
  $b = (int) "Gabriel";
  echo $b . "<br>";

  $c = (int) 20.9;
  echo $c . "<br>";
  $d = (int) 10;
  echo $d . "<br>";

  $e = (int) true;
  echo $e . "<br>";
  $f = (int) false;
  echo $f . "<br>";

  $g = (int) [1, 2, 3];
  echo $g . "<br>";
  $h = (int) [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  echo $h . "<br>";