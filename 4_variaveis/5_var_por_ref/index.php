<?php

  $x = 10;

  $y =& $x;

  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $y = 15;

  echo "Atribuição após ref";
  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $x = 20;

  echo "Atribuição após ref 2";
  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $nome = "Gabriel";

  $nome2 =& $nome;

  echo $nome;
  echo "<br>";
  echo $nome;
  echo "<br>";

  $nome2 = "Guilherme";

  echo $nome;
  echo "<br>";
  echo $nome;
  echo "<br>";



