<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="estilo.css">
  <title>Calcular Grados</title>

</head>
<body>
  <?php
    class Temperatura {
      private $grados;

      public function __construct($grados) {
        $this->grados = $grados;
      }

      public function evaluar() {
        if($this->grados <= 0) {
          echo '<span class="temperatura fria">Temperatura máximamente fría</span>';
        } elseif ($this->grados <= 30) {
          echo '<span class="temperatura estable">Temperatura estable</span>';
        } else {
          echo '<span class="temperatura caliente">Temperatura máximamente caliente</span>';
        }
      }
    }

    $temp = new Temperatura(25);
  ?>
  <div>La temperatura actual es: <?php $temp->evaluar(); ?></div>
</body>
</html>
