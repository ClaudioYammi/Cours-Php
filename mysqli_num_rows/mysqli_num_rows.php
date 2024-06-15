/*mysqli_num_rows est une fonction de PHP utilisée pour obtenir le nombre de lignes dans un jeu de résultats après l'exécution d'une requête SELECT à l'aide de MySQLi.*/
<?php
    $conn = mysqli_connect('localhost', 'nom_utilisateur', 'mot_de_passe', 'nom_base_de_données');
    $result = mysqli_query($conn, 'SELECT * FROM ma_table');
    $numRows = mysqli_num_rows($result);
    echo "Nombre de lignes : " . $numRows;
?>