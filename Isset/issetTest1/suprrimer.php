<?php
include_once "connexion.php";

//recuperation de la valeur
$id = $_GET['id'];

$sql2 = mysqli_query($con, "DELETE FROM perry WHERE id=$id");
//redirection vers la page index php
header("Location:isset2.php");
?>