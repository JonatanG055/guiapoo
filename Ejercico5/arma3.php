<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Arma {
        public $tipo;
        public $balas = 0;

        public function __construct($tipo) {
            $this->tipo = $tipo;
        }

        public function recargar() {
            if ($this->balas == 0) {
                $this->balas = 8;
                return true;
            } else {
                return false;
            }
        }

        public function disparar() {
            if ($this->balas > 0) {
                $this->balas--;
                return true;
            } else {
                return false;
            }
        }
    }

    // Instantiate objects of the Arma class
    $arma1 = new Arma("Pistola");
    $arma2 = new Arma("Escopeta");
    $arma3 = new Arma("Rifle");
    $arma4 = new Arma("Metralleta");
    ?>

    <div>
        <label><?php echo $arma1->tipo ?>:</label>
        <input type="number" id="arma1" value="0" min="0">
        <button onclick="recargar(1)">Recargar</button>
        <button onclick="disparar(1)">Disparar</button>
    </div>
    <div>
        <label><?php echo $arma2->tipo ?>:</label>
        <input type="number" id="arma2" value="0" min="0">
        <button onclick="recargar(2)">Recargar</button>
        <button onclick="disparar(2)">Disparar</button>
    </div>
    <div>
        <label><?php echo $arma3->tipo ?>:</label>
        <input type="number" id="arma3" value="0" min="0">
        <button onclick="recargar(3)">Recargar</button>
        <button onclick="disparar(3)">Disparar</button>
    </div>
    <div>
        <label><?php echo $arma4->tipo ?>:</label>
        <input type="number" id="arma4" value="0" min="0">
        <button onclick="recargar(4)">Recargar</button>
        <button onclick="disparar(4)">Disparar</button>
    </div>

    <script>
        function recargar(armaNum) {
            var arma = "arma" + armaNum;
            var inputArma = document.getElementById(arma);
            var municion = inputArma.value;
            var maxMunicion = <?php echo $arma5->maxMunicion ?>;
            var recarga = maxMunicion - municion;
            inputArma.value = maxMunicion;
            alert("Recargaste " + recarga + " balas.");
        }

        function disparar(armaNum) {
            var arma = "arma" + armaNum;
            var inputArma = document.getElementById(arma);
            var municion = inputArma.value;
            if (municion > 0) {
                municion--;
                inputArma.value = municion;
                alert("Disparaste una bala. Te quedan " + municion + " balas.");
            } else {
                alert("No te quedan balas.");
            }
        }
    </script>
    </body>
</html>
