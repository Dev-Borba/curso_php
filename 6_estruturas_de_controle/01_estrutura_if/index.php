<?php


  # Condição verdadeira
  if(5 > 2) {
    echo "Deu certo! Entrou no if <br>";
  }

  # Condição false
  if(2 >= 5) {
    echo "Não vai entrar no if, porque deu false <br>";
  }

  # Utilizar op. lógico
  if(10 === 10 && 9 > 3) {
    echo "Deu certo! Entrou no if 2 <br>";
  }

  # Variáveis
  $a = 10;
  $b = 5;
  $c = "Deu certo! Entrou no if 3 <br>";

  if($a >= $b) {
    echo $c;
  }