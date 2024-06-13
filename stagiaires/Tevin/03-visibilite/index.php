<?php

include "PersoClass01.php";

// instanciations
$personnage01 = new PersonnageClasse01();
$personnage02 = new PersonnageClasse01();

/* en privé, impossible de lire ou d'écrire un paramètre
echo $perso01->nom;
echo $perso01->vivant;
*/

// on peut lire une constante publique
echo PersonageClasse01::ESPECES;

/* On ne peut pas la modifier 
$perso01::ESPECES = 5;
ou
PersoClass01::ESPECES = 5;
*/
echo $personage01->getNom();

// utilisation d'un setter (modification)
$personage01->setNom("  <br>Shu");

// utilisation d'un getter (affichage)
echo $personage01->getNom();

$personage02->setNom("Zola");

echo $personage01->getVivant();

$personage02->setVivant(false);

/* Appel d'une méthode privée (ou protégé) depuis l'intérieur : */

//$perso03 = $perso01;

//$perso03->setNom("Yep");

var_dump($persnageo01,$personage02);
