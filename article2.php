<?php
session_start();
$servername = 'localhost';
$dbname= 'projet l3';
$username= 'root';
$password = '';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$userID = $_SESSION['userID'];
if(isset($userID)){

// Récupérer les valeurs du formulaire
$nomProduit = $_POST['nomProduit'];
$dispo = $_POST['dispo'];
$prix = $_POST['prix'];
$categorie = $_POST['categorie'];
$typeTransaction = $_POST['typeTransaction'];
$contact = $_POST['contact'];
$description = $_POST['description'];
$dateFin = $_POST['dateFin'];
$dateDebut = $_POST['dateDebut'];


// Traitement de la photo
$photo = $_FILES['photo']['name'];
$photoTemp = $_FILES['photo']['tmp_name'];
$photoPath = "C:\wamp64\www\web\img" . $photo;
move_uploaded_file($photoTemp, $photoPath);

// Insertion des info dans la BDD
$sql = "INSERT INTO article (Libelle, dispo_prod, prix, categorie, typeTransaction, description, photo,contact, ID_F) VALUES ('$nomProduit', '$dispo', '$prix', '$categorie', '$typeTransaction', '$description', '$photo','$contact','$userID')";
    
if ($conn->query($sql) === TRUE) {
    header('Location: article.php');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
// Afficher un message de succès ou de confirmation
echo "L'article a été ajouté avec succès !";

// Fermer la connexion
$conn->close();

?>
