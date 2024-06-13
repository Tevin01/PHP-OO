<?php
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
    <code>//$perso = new PersonnageAbstract();</code>
    <p>On peut par contre afficher une constante publique</p>
    <code>var_dump(PersonnageAbstract::ESPECE_CHOICE);</code>
    <?php
    //$perso = new PersoAbstract();
    var_dump(PersonnageAbstract::ESPECE_CHOICE);
    ?>
    <h3>Un héritier doit créer les méthodes abstaites</h3>
    <code>$personnageGuerrier1 = new PersonnageGuerrier("Luc");
    $personnageGuerrier1->setHealthPoint(1000);
    echo $personnageGuerrier1->getHealthPoint();
    </code><br>
    <?php
    $personnageGuerrier1 = new PersonnageGuerrier("Vaïke","Humain");
    $personnageGuerrier1->setHealthPoint(1000);
    echo $personnageGuerrier1->getHealthPoint();
    var_dump($personnageGuerrier1);
    ?>
</body>
</html>
<?php