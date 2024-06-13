<?php

class PersonnageClasse01 {

    // Propriétés (Généralement private ou protected, ou parfois en public readonly (+ rare))
        // Cec est un exemple, mais on ne peut donner de valeur pa défaut ni oublier le type (PHP >= 8.1) !
        // public readonly string $name
        private $nom; // ne peut être lue et modifiée qu'à l'intérieur de cette classe (ou à l'intérieur de instance de cette classe)

        private bool $vivant = true; // on peut typer (bonne pratique) une propriété et lui donner une valeur par défaut

    // Constantes

        public const ESPECES = "Humain";

    // Méthodes 

        // on va créer une méthode publique qui permet de récupérer une prioriété privée (ou protégée)
        public function getNom(){
            // qui renvoie la propriété nom qui se trouve dans l'objet (instance) =$this
            return $this->nom;
        }

        /* on va créer une méthode publique qui permet de récupérer une prioriété privée 
        (ou protégée), en utilisant (ou pas) ses paramètres */
        public function setNom(string $name){
            //
            $name = strip_tags(trim($name));
            // on veut que le nom ai plus de 2 caractères
            if(strlen($name)>2){
                //modification de la proopriété privée $nom dans cette instance ($this)
                $this->nom = $name;
            }else{
                // On lance une exception
                throw new Exception("Nom trop court");
            }
            
        }

        public function getVivant(): bool
        {
            return $this->vivant;
        }

        public function setVivant(bool $alive): void
        {
            $this->vivant = $alive;
        }

        //création d'une méthode privée, elle ne pourra être appelée que dans l'instance de la classe
        private function estVivante(): bool
        {
            // on vérifie un paramètre (privé, mais on est dans l'instance de classe)
            if($this->vivant === true){
                return "est vivant";
            }else{
                return "et est décédé";
            }
        }

        // création d'une méthode publique qui va indiquer toutes les infos sur le personnage
        public function infoPerso(){
            /* Depuis une méthode publique, on peut afficher 
            $this->nom => propriété privée ($this représente l'instance)
            self::ESPECES => une constante de la classe (self représente la classe)
            $this->estVivante() => est une méthode privée*/

            
            return $this->nom. " est ".
                                self::ESPECES.
                                $this->estVivante();
        }

}