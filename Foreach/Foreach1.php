<?php
    // Connexion à la base de données et récupération des utilisateurs
    require_once "connexion.php";
    $users = mysqli_connect($con, "SELECT*FROM perry");
    
    // Parcourir les utilisateurs
    foreach ($users as $row) {
        $userId = $row['id'];
        $userName = $row['nom'];
        $userEmail = $row['prenom'];
    
        // Générer le lien vers la page de modification
        $modifierUrl = "modifier.php?id=$userId";
        echo "<a href='$modifierUrl'>Modifier l'utilisateur $userName</a><br>";
    }
    
?>