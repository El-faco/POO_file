<?php

namespace Acme;

class League 
{
   private $name;
   private $teams;

   public function __construct($name)
   {
       $this->name = $name;
       $this->teams = [];
   }

   public function add_team($team)
   {
       $this->teams[] = $team;
   }

   public function getleague()
   {
       return count($this->teams);
   }
}