<?php

# Crie um arquivo PHP;
# Crie um array associativo com caracteristicas de uma pessoa;
# Desafio: faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja:

$pessoa = [
  'nome' => 'Gabriel',
  'idade' => 11,
  'profissao' => 'Programado',
  'graduacao' => 'Sistemas da Informação'
];

$maioridade = 18;

// desafio
if ($pessoa['idade'] >= $maioridade) {
  echo "A pessoa é maior de idade.";
} else {
  echo "A pessoa é menor de idade.";
}
