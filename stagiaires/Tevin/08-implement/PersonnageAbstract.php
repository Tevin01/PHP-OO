<?php

abstract class PersonnageAbstract{
    // propriétés héritables
    protected ?string $name;
    protected int $healthPoint=1000;
    protected int $experience=0;
    protected string $espece;

    // constantes publiques
    public const  ESPECE_CHOICE = [
        "Humain",
        "Saiyan",
        "Elf",
        "Goblin",
        "Cyborg",
    ];
    protected const  THROW_DICE_SMALL = 6;
    protected const  THROW_DICE_BIG = 20;

    // Méthodes


    // une méthode abstraite ne peut être privée
    // abstract private function Vegeta();

    // méthodes abstraites, elles sont déclarées dans la classe abstraite, pour obliger
    // les héritiers à redéclarer ces méthodes en public ou protected
    abstract public function attack($enemy);
    abstract public function defence();
    abstract protected function initPersonnage();


    // méthode __construct qui sera héritée

    /**
     * @throws Exception
     */
    public function __construct(string $theName, string $theEspece)
    {
        // utilisation du setter pour le nom
        $this->setName($theName);
        $this->setEspece($theEspece);
    }

    /*
    Méthodes pour les lancer de dés
    */
    /**
     * @throws \Random\RandomException
     */
    public function throwSmallDice(int $number=1): array
    {
        $dice = array();
        for($i=1; $i<=$number; $i++){
            $dice[$i] = random_int(1,self::THROW_DICE_SMALL);
        }
        return $dice;
    }

    /**
     * @throws \Random\RandomException
     */
    public function throwBigDice(int $number=1): array
    {
        $dice = array();
        for($i=1; $i<=$number; $i++){
            // ternaire positif/négatif
            $dice[$i] = random_int(1,self::THROW_DICE_BIG);
        }
        return $dice;
    }

    /*
    GETTERS AND SETTERS
    */

    // méthode get qui sera héritée
    public function getName(): ?string
    {
        return $this->name;
    }

    // méthode set qui sera héritée (en fluent setters: retourne l'instance plutôt que du vide)

    /**
     * @throws Exception
     */
    public function setName(string $tName): self|Exception
    {
        // protection
        $ProtectedName = trim(strip_tags($tName));
        // nombre de caractères
        $nbName = strlen($ProtectedName);
        // si le nom est plus grand que 2 caractères et plus petit ou égal à 20 caractères
        if($nbName > 2 && $nbName <= 20){
            
            // on remplit la propriété avec la variable VERIFIEE
            $this->name = $ProtectedName;
            // on renvoie l'instance (fluent setting)
            return $this;
        }
        // si le nom n'est pas valide (else implicite via le return)
        throw new Exception("Nom non valide");
    }


    // getter de $espece (string)
    public function getEspece():string
    {
        return $this->espece;
    }

    // Setter de $espece

    /**
     * @throws Exception
     */
    public function setEspece(string $espece): self|Exception
    {
        if(in_array($espece, self::ESPECE_CHOICE)){
            $this->espece = $espece;
            return $this;
        }else{
            throw new Exception("Je te déconseil de continuer.",334);
        }
    }

    public function getHealthPoint(): int
    {
        return $this->healthPoint;
    }

    public function setHealthPoint(int $health): void
    {
        $this->healthPoint = $health;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function setExperience($experience): void
    {
        $this->experience = $experience;
    }
}