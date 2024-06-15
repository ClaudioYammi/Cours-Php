<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>ADD DATA</title>
</head>
<body>
        <?php
            if (isset($_POST['button'])){
                extract($_POST);
                if(isset($nom) && isset($prenom)){
                    include_once "connexion.php";
                    $sql = mysqli_query($con, "INSERT INTO perry VALUES (NULL,'$nom','$prenom')");
                } else {
                    echo $message = "ajouter des données <br>";
                }
            }
        ?>
    <form action="" method="post">
        <h3>AJOUTER</h3>
        <div class="erreur">
            <?php
                if(isset($message)) {
                    echo $message;
                }
            ?>
        </div>
        <label for="">Nom</label>
        <input type="text" name="nom">
        <label for="">prenom</label>
        <input type="text" name="prenom">
        <input type="submit" value="Ajouter" name="button">
    </form>
    <table class="table-scol">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>age</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>

        <?php
        include_once "connexion.php"; 
        //requete sql
        $sql1 = mysqli_query($con, "SELECT*FROM perry");
        if($num=mysqli_num_rows($sql1)==0){
            echo "Table vide, ajouter!!";
        } else {
                    //parcourir le tableau
            while($row=mysqli_fetch_assoc($sql1)){
                ?>
            <tr>
                <td><?=$row['nom']?></td>
                <td><?=$row['prenom']?></td>
                <td><a href="suprrimer.php?id=<?=$row['id']?>"><img src="img/supprimer.png"></a></td>
            </tr>
            <?php  
            }
        }
        //requete de suppression
        ?>
    
        
    </table>
</body>
</html>