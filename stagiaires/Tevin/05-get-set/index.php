<?php
include_once "PersonnageClassennage03.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters et Setters</title>
</head>
<body>
    <h1>Getters et Setters</h1>
    <h2>Accessors ou Getters</h2>
    <p>Ce sont des méthodes publiques, qui permettent de récupérer des propriétées private ou protected (public également, mais peu utilisé car peu sécurisé, et inutile depuis PHP 8.1 grâce au readonly)</p>
    <p>On les nommera comme les propriétés, en rajoutant get devant le nom mis en majuscule</p>
    <pre><code>protected string $name;
protected ?int $hp;
    // getters:
public function getName(): string 
    {
        return $this->name;
    }
public function getHp();

$personnage03A = new PersoClass03("Steve",16,"Humain");

// On peut récupérer le nom avec 

echo $personnage03A->getName();

</code></pre>
<?php
try{
    $personnage03A = new PersoClass03("  <br>  Samuel  <br> ",16,"Humain");
    echo $personnage03A->getName();
    
}catch(Exception $e){
    echo $e->getCode(). " ".$e->getMessage();
}
?>

<?php

echo $personnage03A;

var_dump($personnage03A);

try{
// ici utiliser les setters pour modifier
    $personnage03A->setName("Medhi");
    $personnage03A->setEspece("Elf");
    $personnage03A->setHp(3);
    $personnage03A->setAge(13);
    $personnage03A->setXp(26);
    $personnage03A->setLevel(1);
    $personnage03A->setAlive(true);
}catch(Exception $e){
    echo $e->getCode()." ".$e->getMessage();
}

try{
// ici les getters pour afficher
    echo $personnage03A->getName()."<br>";
    echo $personnage03A->getHp()."<br>";
    echo $personnage03A->getAge()."<br>";
    echo $personnage03A->getXp()."<br>";
    echo $personnage03A->getLevel()."<br>";
    echo $personnage03A->getEspece()."<br>";
    echo $personnage03A->getAlive()."<br>";
}catch(Exception $e){
    echo $e->getCode()." ".$e->getMessage();
}

var_dump($personnage03A);
?>
</body>
</html>