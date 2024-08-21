<?php

  class Pessoa {
    
    function falar() {
      echo "Olá, eu estou falando!";
    }
  }

  $gabriel = new Pessoa();

  $gabriel->nome = "Gabriel";

  echo $gabriel->nome;

  echo "<br>";

  $gabriel->falar();