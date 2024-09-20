<?php

# Crie alguas variaveis com tipos de dados diferentes: string,int e boolean, por exemplo;
# Cheque se a variavel é um inteiro;
# Caso sim, apresente uma mensagem confirmando o tipo de dado;
# Caso não, apresente outra mensagem.

$a = 12;
$b = "Roda";
$c = [];

if (is_int($a)) {

  echo "A variável $a é do tipo inteiro. <br>";
} else {

  echo "A variável $a não é do tipo inteiro. <br>";
}

if (is_int($b)) {

  echo "A variável $b é do tipo inteiro. <br>";
} else {

  echo "A variável $b não é do tipo inteiro. <br>";
}

if (is_int($c)) {

  echo "A variável $c é do tipo inteiro. <br>";
} else {

  echo "A variável $c não é do tipo inteiro. <br>";
}