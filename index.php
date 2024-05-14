<?php

// Interface pour les véhicules avec éclairage
interface LightableInterface {
    public function switchOn(): bool;
    public function switchOff(): bool;
}

// Classe Car
class Car implements LightableInterface {
    public function switchOn(): bool {
        return true;
    }

    public function switchOff(): bool {
        return false;
    }
}

// Classe Bike
class Bike implements LightableInterface {
    private $currentSpeed;

    public function __construct(int $currentSpeed) {
        $this->currentSpeed = $currentSpeed;
    }

    public function switchOn(): bool {
        // Allume la lumière uniquement si la vitesse est supérieure à 10 km/h
        return $this->currentSpeed > 10;
    }

    public function switchOff(): bool {
        return false;
    }
}

// Classe SkateBoard (sans implémentation de l'interface)
class SkateBoard {
    // Votre implémentation ici
}

// Exemple d'utilisation
$car = new Car();
$bike = new Bike(15); // Vitesse de 15 km/h
$skateboard = new SkateBoard();

echo "Car light on: " . ($car->switchOn() ? 'true' : 'false') . "\n";
echo "Bike light on: " . ($bike->switchOn() ? 'true' : 'false') . "\n";
// Skateboard n'a pas de méthode switchOn() ou switchOff()

?>
