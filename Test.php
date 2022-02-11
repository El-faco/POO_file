<?php



use Acme\{Person, Team, League};


$zahirou = new Person("Zahirou DERMANN");
$kaled = new Person("kaled TCHAGBA");

$barcelona = new Team("Barcelona");
$RealMadrid = new Team("Real Madrid");

$zahirou->favorite($RealMadrid);
$kaled->favorite($RealMadrid);
$kaled->favorite($barcelona);

echo $barcelona->getName(). ' a '. $barcelona->getNbreFans(). ' fans '. PHP_EOL;
echo $RealMadrid->getName(). ' a '. $RealMadrid->getNbreFans(). ' fans '. PHP_EOL;


$liga = new League("Liga");
$liga->add_team($barcelona);
$liga->add_team($RealMadrid);

echo $liga->getleague(). PHP_EOL;