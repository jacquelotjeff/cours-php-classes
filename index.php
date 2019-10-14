<?php

require_once 'Entreprise.php';
require_once 'Personne.php';
require_once 'Voiture.php';
require_once 'Marque.php';
require_once 'Location.php';

$peugeot = new Marque('Peugeot');
$audi = new Marque('Audi');

$vehicule = new Voiture($peugeot, '308', 2019);
$vehicule
    ->setImmatriculation("BS768XR")
    ->setPoids(1320)
    ->setConsommation(10)
    ->setPuissance(270)
    ->setNombreDePortes(4);

$vehicule2 = new Voiture($audi, 'A1', 2011);
$vehicule2
    ->setPoids(1040)
    ->setImmatriculation('TR800BS')
    ->setPuissance(105)
    ->setConsommation(5)
    ->setNombreDePortes(2);


$client1 = new Personne();
$client1
    ->setIdentifiant('18212121')
    ->setNom('Martins-Jacquelot')
    ->setPrenom('Jeff')
	->setAdresse("2 rue de la petite imprimante, 69420 Mourbignolles-sur-Pétule");

$client2 = new Entreprise();
$client2
    ->setIdentifiant('7HBRR')
    ->setNom('Livequestion');

$location1 = new Location();
$location1
    ->setClient($client1)
    ->setVehicule($vehicule);

$location2 = new Location();
$location2
    ->setClient($client2)
    ->setVehicule($vehicule2);

echo $client1->getAdresse();