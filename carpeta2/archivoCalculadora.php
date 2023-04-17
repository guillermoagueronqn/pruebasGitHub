<?php
class Calculadora{
    private $numA;
    private $numB;

    // METODO CONSTRUCTOR DE LA CLASE
    public function __construct($nA, $nB){
        $this -> numA = $nA;
        $this -> numB = $nB;
    }

    // METODOS GET
    public function getNumA (){
        return $this -> numA;
    }
    public function getNumB (){
        return $this -> numB;
    }

    // METODOS SET
    public function setNumA ($nuevoNumA){
        $this -> numA = $nuevoNumA;
    }
    public function setNumB ($nuevoNumB){
        $this -> numB = $nuevoNumB;
    }

    // METODO QUE SUMA LOS DOS NUMEROS DEL OBJETO Y RETORNA EL RESULTADO
    public function suma (){
        $resultado = $this->getNumA() + $this->getNumB();
        return $resultado;
    }

    // METODO QUE RESTA LOS DOS NUMEROS DEL OBJETO Y RETORNA EL RESULTADO
    public function resta (){
        $resultado = $this->getNumA() - $this->getNumB();
        return $resultado;
    }

    // METODO QUE DIVIDE LOS DOS NUMEROS DEL OBJETO Y RETORNA EL RESULTADO
    public function division (){
        $resultado = $this->getNumA() / $this->getNumB();
        return $resultado;
    }

    // METODO QUE MULTIPLICA LOS DOS NUMEROS DEL OBJETO Y RETORNA EL RESULTADO
    public function multiplicacion (){
        $resultado = $this->getNumA() * $this->getNumB();
        return $resultado;
    }

    // METODO __toString QUE MUESTRA LOS RESULTADOS DE LAS OPERACIONES
    public function __toString (){
        return $this->getNumA() . " + " . $this->getNumB() . " = " . $this->suma() . "\n" .
        $this->getNumA() . " - " . $this->getNumB() . " = " . $this->resta() . "\n" .        
        $this->getNumA() . " * " . $this->getNumB() . " = " . $this->multiplicacion() . "\n" .
        $this->getNumA() . " / " . $this->getNumB() . " = " . $this->division() . "\n";
    }

}