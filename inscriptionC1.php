<?php
$servername = "localhost";    $username = "root";   $password = "";  $database = "projet l3";
// Creer une connexion
$conn = new mysqli($servername, $username, $password, $database);
// Verifier connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); }
// récupération des données du formulaire telephone
$Pseudo_C = $_POST['Pseudo_C'];
$Email = $_POST['Email'];
$mdp = $_POST['mdp'];
$N_didentite = $_POST['N_didentite'];
$telephone = $_POST['telephone'];

// création de la requête SQL pour insérer l'utilisateur dans la table Utilisateurs
$sql = "INSERT INTO client (Pseudo_C , Email , mdp , N_didentite , telephone) VALUES ('$Pseudo_C ','$Email','$mdp','$N_didentite','$telephone')";
// exécution de la requête SQL
if ($conn->query($sql) === TRUE) {

  echo"L'utilisateur a ete ajoute avec succes.";

  
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}
// fermeture de la connexion
$conn->close();
header('location:new-indexC.php');
?>