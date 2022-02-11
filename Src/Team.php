<?php

namespace Acme;

class Team
{
     private $name;
     private $nbreFans= 0;

     public function __construct($name)
     {
         $this->name = $name;
         
     }

     public function getName()
     {
         return $this->name;
     }

     public function getNbreFans()
     {
         return $this->nbreFans;
     }


     public function favorite()
     {
        $this->nbreFans++;
     }
}