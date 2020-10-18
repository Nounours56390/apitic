<?php
 
namespace App\Classes;

use Swift;

class Chasseur
  {
    public $spe;
    public $vie = "50";
    public $color = "#32CD32";


    public function __construct($spe) 
    {
        $this->spe = $spe;
    }

    public function pv()
    { 
      return $this->vie;
    }

    public function getClasseName()
    {
      return "chasseur";
    }
    public function getTypeSort()
    {
      return "coup";
    }

    public function getCoupFav()
    {
      return "Hurlement de la bete";
    }

    public function __call($nom, $arguments)
    {
      return "Je suis un chasseur avec la specialisation ".$this->spe;
    }
  }