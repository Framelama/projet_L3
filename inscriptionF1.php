<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "projet l3";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

// récupération des données du formulaire telephone
$Pseudo_F = $_POST['Pseudo_F'];
$Email = $_POST['Email'];
$mdp = $_POST['mdp'];
$adresse = $_POST['adresse'];
$code = $_POST['code'];


// création de la requête SQL pour insérer l'utilisateur dans la table Utilisateurs
$sql = "INSERT INTO fournisseur (Pseudo_F , Email , mdp , adresse, code) VALUES ('$Pseudo_F ','$Email','$mdp','$adresse','$code')";

// exécution de la requête SQL
if ($conn->query($sql) === TRUE) {
    echo "L'utilisateur a été ajouté avec succès.";
   
   
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}



$conn->close();
header('location:connecter.php');

?>