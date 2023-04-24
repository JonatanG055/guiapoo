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

// Instantiate objects of the Arma classes
$armas = [
    new Pistola(),
    new Escopeta(),
    new Rifle(),
    new Metralleta()
];

// Generate the HTML code for the weapons
foreach ($armas as $index => $arma) {
    echo "<div>";
    echo "<label>{$arma::class}:</label>";
    echo "<input type='number' id='arma{$index}' value='0' min='0'>";
    echo "<button onclick='recargar({$index})'>Recargar</button>";
    echo "<button onclick='disparar({$index})'>Disparar</</div>";
}
// Generate the HTML code for the targets
foreach ($objetivos as $index => $objetivo) {
echo "<div>";
echo "<label>{$objetivo::class}:</label>";
echo "<input type='number' id='objetivo{$index}' value='0' min='0'>";
echo "<button onclick='destruir({$index})'>Destruir</button>";
echo "</div>";
}
