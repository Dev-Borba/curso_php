<?php

  # Insira o valor 5 em uma variável, e o valor 3 em outra;
  # Teste os operadores de: igualdade, diferença, idêntico e não idêntico;

  $a = 5;
  $b = 3;

  // op igualdade

    if($a == $b) {
      echo "Os valores não são iguais <br>";
    }

    if($a == 5) {
      echo "O valor de A é igual a 5 <br>";
    }

  // op diferença

  if($a != $b) {
    echo "Os valores são diferentes <br>";
  }

  // op idêntico

  if($a === $b) {
    echo "Os valores são idênticos <br>";
  }

  if($a === 5) {
    echo "Os valores são idênticos <br>";
  }

  // op não idêntico

  if($a !== $b) {
    echo "Os valores não são idênticos <br>";
  }
