<?php
require_once "ActionsPersonnageInterface.php";
require_once "PassivePersonnageInterface.php";
require_once "PersonnageAbstract.php";
require_once "PersonnageGuerrier.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class abstract</title>
</head>
<body>
    <h1>class abstract</h1>
    <p>Une classe abstraite ne peut être instanciée, elle va servir de modèle pour les classes enfants</p><p>On peut hériter des propriétées ou méthodes non abtraites.</p>
    <code>//$personnage = new PersonnageAbstract();</code>
    <p>On peut par contre afficher une constante publique</p>
    <code>var_dump(PersonnageAbstract::ESPECE_CHOICE);</code>
    <?php
    //$perso = new PersonnageAbstract();
    var_dump(PersonnageAbstract::ESPECE_CHOICE);
    ?>
    <h3>Un héritier doit créer les méthodes abstraites</h3>
    <code>$personnageGuerrier1 = new PersonnageGuerrier("Luc");
    $personnageGuerrier1->setHealthPoint(1000);
    echo $personnageGuerrier1->getHealthPoint();
    </code><br>
    <h3>Lors de la création de personnages</h3>
    <p>Nous pouvons récupérer les infoPersongetInfoPersonnage qui sont générées depuis le constructeur</p>
    <pre><code>$personnageGuerrier1 = new  PersonnageGuerrier("Vaïke","Humain");
    echo $personnageGuerrier1->getInfoPersonnage();
    $persoWarrior2 = new PersonnageGuerrier("Nowi","Elf");
    echo $persoWarrior2->getInfoPerso();</code></pre>
    <p>
    <?php
    $personnageGuerrier1 = new PersoWarrior("Lee","Humain");
    echo $personnageGuerrier1->getInfoPersonnage();
    $personnageGuerrier2 = new PersonnageGuerrier("Nowi","Elf");
    echo $personnageGuerrier2->getInfoPersonnage();


    //$personnageGuerrier1->setHealthPoint(1000);
    //echo $personnageGuerrier1->getHealthPoint();
    //var_dump($personnageGuerrier1,$persoWarrior2);

    // var_dump($persoWarrior1->throwBigDice(5,false));

    echo $personnageGuerrier1->attack($personnageGuerrier2)."<br>";
    echo $personnageGuerrier2->attack($personnageGuerrier1)."<br>";
    echo $personnageGuerrier1->attack($personnageGuerrier2)."<br>";
    echo $personnageGuerrier2->attack($personnageGuerrier1)."<br>";

    var_dump($personnageGuerrier1,$personnageGuerrier2);
    ?>
</body>
</html>
<?php

