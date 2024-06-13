<?php
session_start();

require_once "PersonnageClasse02.php";

$perso ="Pas encore de Perso";

if(isset($_POST['username'],$_POST['espece'])){
    try{
        $perso = new PersonnageClasse02($_POST['username'],$_POST['espece']);
        $perso2 = new PersonnageClasse02(espece:"Cyborg",nom:"Franky");
    }catch(Exception $e){
        die($e->getMessage());
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un personnage</title>
</head>
<body>
    <h1>Création d'un personnage</h1>
    <form action="" method="POST" name='perso'>
        <input type="text" name="username" placeholder="Votre nom" required><br>
        Votre espèce:
        <select name="espece" required>
        <?php
            foreach(PersonnageClasse02::ESPECE_CHOICE as $item):
        ?>
            <option value="<?=$item?>"><?=$item?></option>
        <?php
            endforeach;
        ?>
        </select>
        <input type="submit" value="Créer votre personnage">
    </form>
    <?php
    var_dump($perso);
    $perso->setEspece("Cyborg");
    var_dump($perso,$perso2);
    ?>
</body>
</html>