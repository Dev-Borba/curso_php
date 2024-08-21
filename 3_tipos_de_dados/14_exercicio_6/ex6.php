<?php

  # Crie um arquivo PHP;
  # Crie um array com caracteristicas de um carro;
  # Imprima duas caracteristicas;

  $carro = [
    'marca' => 'Mercedes c63 AMG',
    'rodas' => 4,
    'teto_solar' => true,
    'velocidade_max' => 360,
    'blindado' => true
  ];

  print_r($carro);

  $marca = $carro['marca'];
  $velocidade_maxima = $carro['velocidade_max'];

  echo "<br>";

  echo "O carro é da marca $marca e atinge no máximo $velocidade_maxima km/h";