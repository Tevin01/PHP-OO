<?php
// l'interface ne peut contenir que des méthodes publiques
interface ActionsPersonnageInterface{
    // un personnage doit attaquer
    public function attack($enemy): string;
    // un personnage doit se défendre
    public function defence(): array;
}