<?php

  # Crie um arquivo PHP;
  # Teste a expressão "5" * 12;
  # Utilize a função gettype() com o resultado como parâmetro para checar o tipo resultante da operação;

  $operacao = "5" * 12;
  echo $operacao . "<br>"; // 60

  echo gettype($operacao); // integer
  echo "<br>";
  echo gettype([]); // array
  echo "<br>";
  echo gettype(12.2); // double
  echo "<br>";
  echo gettype("teste"); // string