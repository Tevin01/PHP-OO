<?php

require_once "PremiereClasse.php";

// on va instancier notre classe avec le mot de clef new
$instance1 = new PremiereClasse; // parenthèse non obligatoires, mais mauvaise pratique de ne pas les mettre

$instance2 = new PremiereClasse(); // bonne pratique d'instanciation

?>

<h3>En PHP les arrays ne sont pas des objets</h3>
<p>On peut donc les cloner avec le signe =</p>
<p>C'est historiquement du au fait que PHP est langage créé pour utiliser les tableaux</p>

<code>
    $instance3 = $instance1;
    $instance3 n'est qu'un raccourci vers le même objet (= ne permet pas le clonage)
</code>

<?php

$instance3 = $instance1;

var_dump($instance1, // Premiere objet de type PremiereClasse
        $instance2,  // deuxieme objet (ou instance de classe) de type PremiereClasse
        $instance3, // ceci n'est qu'un lien vers l'instance numéro 1
);
