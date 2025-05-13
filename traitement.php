<?php
// Bug 1: 


// Bug 2:
IF ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $message = $_POST['message'];
 // Vérification des données
     if (empty($message)) {
        echo "Tous les champs sont obligatoires";
        exit;
    }else if( $age < 0) {
    // Bug 3: 
    echo "L'âge doit être positif";
    exit;
    }else{
        echo "Données reçues avec succès!";
    }
}
?> 


