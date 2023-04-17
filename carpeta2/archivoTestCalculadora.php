<?php
include 'archivoCalculadora.php';
$calculadora = new Calculadora(10, 5);
echo $calculadora->getNumA() . " + " . $calculadora->getNumB() . " = " . $calculadora->suma() . "\n";
echo $calculadora->__toString();