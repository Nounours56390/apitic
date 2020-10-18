<?php
 
namespace App\Classes;

  class Guerrier
  {
    public $spe;
    public $vie = "200";
    public $color = "#8b4513";


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
      return "guerrier";
    }
    public function getTypeSort()
    {
      return "coup";
    }

    public function getCoupFav()
    {
      return "Cri de guerre";
    }

    public function __call($nom, $arguments)
    {
      return "Je suis un guerrier avec la specialisation ".$this->spe;
    }

  }