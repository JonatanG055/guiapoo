<?php
class Convertidor// declaramos la clase
{
    private $celsius; //definimos el atributo 
    public function __construct($celsius)//creamos el constructor y le pasamos el atributo 
    {
        $this->celsius= $celsius;

    }

    public function convetidor()// definimos el metodo public conver utilizando la formula F=c*9/5+32 para convertir grados faherenheit 
    { 
        $fahrenheit = ($this->celsius*9/5)+32;
        return $fahrenheit;
    }
}
$convertir= new Convertidor(25);//se crea la intancia con el valor de 25grados  celsius 
echo $convertir->convetidor(); // imprimimos el resultado 
?>