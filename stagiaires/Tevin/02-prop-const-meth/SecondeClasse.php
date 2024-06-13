<?php 

class SecondeClasse{
    /*
    Propiétés
    ce sont des variables (même règle de nommage)
    internes à la classe
    La visibilité par défaut est publique
    */

    public $param1; // propriété vide
    public $param2 = "coucou"; // propriété avec valeur par défaut
    public int $param3; // propriété typée
    public int | float $param4; // propriété multi-type (PHP8) int ou float
    public ?string $param5; // propriété multi-type (valide en PHP7) null ou string

    /*
    Constances
    ce sont des variables non modifiables qui doivent être initialisées
    avec leur valeur. Les règles de nommage sont en UPPER_SNAKE_CASE
    La visibilité par défaut est publique
    */
    const CONSTANCE_1 = "constance publique 1";
    const CONSTANCE_2 = 4;

    /*
Méthodes
Ce sont des fonctions qui ont différentes visibilités
La visibilité par défaut est publique
On utilise le CamelCase comme règle de nommage (+ règles des fonctions) */

// publique par défaut (mauvaise pratique de ne pas l'indiquer)
function bonjourLesAmies() {
    echo "Bonjour les ami.e.s"; // deuxième mauvaise pratique, il vaut mieux utiliser un return en sortie, sinon ceci est une procédure
}

// getter => renvoi le contenu d'un paramètre
};