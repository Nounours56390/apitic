<?php
 
namespace App\Classes;

  class Pretre
  {
    public $spe;
    public $vie = "100";
    public $color = "#FFFFFF";


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
      return "pretre";
    }
    public function getTypeSort()
    {
      return "soin";
    }

    public function getCoupFav()
    {
      return "Hymne divin";
    }

    public function __call($nom, $arguments)
    {
      return "Je suis un pretre avec la specialisation ".$this->spe;
    }

  }