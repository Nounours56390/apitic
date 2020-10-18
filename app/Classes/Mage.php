<?php
 
namespace App\Classes;

  class Mage
  {
    public $spe;
    public $vie = "150";
    public $color = "#5aabff";


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
      return "mage";
    }
    public function getTypeSort()
    {
      return "sort";
    }

    public function getCoupFav()
    {
      return "Murmure de magie";
    }

    public function __call($nom, $arguments)
    {
      return "Je suis un mage avec la specialisation ".$this->spe;
    }

  }