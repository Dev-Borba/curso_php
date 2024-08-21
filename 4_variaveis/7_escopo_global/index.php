<?php

   # Global: variável declarada fora de uma função;

   $teste = "asd";

   echo "$teste global 1 <br>";

   if(5 > 2) {
    $teste = "ola";
    echo "$teste if  <br>";
   }
   echo "$teste global 2 <br>";

   function funcao() {
    $teste = "xsxs";
    echo "$teste local <br>";
   }
   funcao();

   function testandoGloval() {
    $teste = "oi";
    echo "$teste local <br>";
   }
   testandoGloval();