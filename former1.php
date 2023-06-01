<?php
$servername = 'localhost';
$dbname= 'projet l3';
$username= 'root';
$password = '';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Récupérer les valeurs du formulaire
$Libelle = $_POST['Libelle'];
$Pseudo_C = $_POST['Pseudo_C'];
$N_telephone = $_POST['N_telephone'];
$N_didentite = $_POST['N_didentite'];
$date_debut = $_POST['date_debut'];
$date_routeur  = $_POST['date_routeur'];



// Insertion des info dans la BDD
$sql = "INSERT INTO location (Libelle, Pseudo_C, N_telephone, N_didentite, Date_Debut, Date_Fin) VALUES ('$Libelle', '$Pseudo_C', '$N_telephone', '$N_didentite', '$date_debut', '$date_routeur')";
    
if ($conn->query($sql) === TRUE) {
    header('Location: Fournisseur.php');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Afficher un message de succès ou de confirmation
echo "Location a été ajouté avec succès !";

// Fermer la connexion
$conn->close();

?>