<?php
// Définition de la classe "Voiture"
 
declare(strict_types=1);
 
class Pont
{


    public function __construct(private float $longueur, private float $largeur) 
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    
    }

}
    
$towerBridge= new Pont(262.0,62.0);

var_dump($towerBridge);
