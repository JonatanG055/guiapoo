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
    interface Arma {
        public function recargar();
        public function disparar();
    }

    class Pistola implements Arma {
        public $balas = 0;

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

    class Escopeta implements Arma {
        public $balas = 0;

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

    class Rifle implements Arma {
        public $balas = 0;

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

    class Metralleta implements Arma {
        public $balas = 0;

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
    $arma1 = new Pistola();
    $arma2 = new Escopeta();
    $arma3 = new Rifle();
    $arma4 = new Metralleta();
    ?>

    <div>
        <label><?php echo get_class($arma1) ?>:</label>
        <input type="number" id="arma1" value="0" min="0">
        <button onclick="recargar(1)">Recargar</button>
        <button onclick="disparar(1)">Disparar</button>
    </div>
    <div>
        <label><?php echo get_class($arma2) ?>:</label>
        <input type="number" id="arma2" value="0" min="0">
        <button onclick="recargar(2)">Recargar</button>
        <button onclick="disparar(2)">Disparar</button>
    </div>
    <div>
        <label><?php echo get_class($arma3) ?>:</label>
        <input type="number" id="arma3" value="0" min="0">
    <button onclick="recargar(3)">Recargar</button>
    <button onclick="disparar(3)">Disparar</button>
</div>
<div>
    <label><?php echo get_class($arma4) ?>:</label>
    <input type="number" id="arma4" value="0" min="0">
    <button onclick="recargar(4)">Recargar</button>
    <button onclick="disparar(4)">Disparar</button>
</div>

<script>
    function recargar(arma) {
        var input = document.getElementById('arma' + arma);
        input.value = 10;
    }

    function disparar(arma) {
        var input = document.getElementById('arma' + arma);
        var ammo = parseInt(input.value);
        if (ammo > 0) {
            ammo--;
            input.value = ammo;
            console.log('Disparando ' + get_class(arma));
        } else {
            console.log('No hay municiones para ' + get_class(arma));
        }
    }
</script>
</body>
</html>