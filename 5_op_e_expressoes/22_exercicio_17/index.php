<?php

  # Verifique as seguintes operações com AND;
  # 15 > 5 AND "João === "João";
  # "teste > 5 AND 1;
  # 2 == 3 AND 5 >= 3;

  if(15 > 5 && "João" === "João") {
    echo "Verdadeiro 1<br>";
  }

  if(("teste" > 5) && 1 ) {
    echo "Verdadeiro 2<br>";
  }

  if(2 == 3 && 5 >= 3) {
    echo "Verdadeiro 3<br>";
  }