<?php

class Temperatura {
  private $grados;

  public function __construct($grados) {
    $this->grados = $grados;
  }

  public function evaluar() {
    if ($this->grados <= 0) {
      echo '<span style="color: blue;">temperatura máximamente FRIA</span>';
    } elseif ($this->grados <= 30) {
      echo '<span style="color: yellow;">temperatura estable</span>';
    } else {
      echo '<span style="color: red;">temperatura máximamente CALIENTE</span>';
    }
  }
}

$temp = new Temperatura(25);
$temp->evaluar(); 

?>
