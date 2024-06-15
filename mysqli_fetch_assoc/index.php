<?php
    $conn = mysqli_connect('localhost', 'nom_utilisateur', 'mot_de_passe', 'nom_base_de_données');
    $result = mysqli_query($conn, 'SELECT * FROM ma_table');
    while ($row = mysqli_fetch_assoc($result)) {
        // Utiliser les valeurs de la ligne récupérée
        echo $row['colonne1'];
        echo $row['colonne2'];
        // ...
    }
?>