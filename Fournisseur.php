<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" />
    <title>Mes produits</title>
    <style>
    form{
        text-align: center; 
        padding: 2px 5px;
        display: inline-block;
        margin-right: 10px;
     
        }
    .row{
        text-align: center; 
        padding: 1px 10px;
    }
    .card-body{
        text-align: center;
       border: 1px solid black; 
        padding: 5px 10px;  
    }

    
    button{  
    border: none;
    border-radius: 6px;
    cursor: pointer;   
    word-break: break-all;
    text-align: center;
    padding: 10px 10px ;
    }
    .last{
    background: red;
    color: white;
    }
    .case{
    background: #0298cf;
    color: white;
    }
    .btn{
    background: green;
    color: white;
    }
    .jst{
    background: #444;
    color: white;
    padding: 10px 35px ;
    }


    </style>
</head>
<body>
    
<nav class="navbar navbar-inverse">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="Fournisseur.php">EcosSport</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="Fournisseur.php">consulter</a></li>
                <li><a href="article.php">Ajouter</a></li>
                <li><a href="toutPF.php">TOUT LES PRODUITS</a></li>
              
            </ul>
           
          
        </nav>
        <?php
session_start();

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet l3";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Récupération de l'id du partenaire connecté
$userID = $_SESSION['userID'];
if(isset($userID)){
// Sélection des salles ajoutées par le partenaire
$sql = "SELECT * FROM article WHERE ID_F = '$userID'";
$result = $conn->query($sql);

// Affichage des résultats
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        echo "<div class='card mb-3 col-md-3'>";
        echo "<div class='card-body'>";
        echo "<img src='img" . $row['photo'] . "' class='img-responsive' style='width:100%' alt=''>";
        echo "<input type='hidden' id='ID_P' name='' value='" . $row['ID_P'] . "' required><br>";
        echo "<h5>Libelle: " . $row['Libelle'] . "</h5>";
        echo "<p>Prix: " . $row['prix'] . " Dz</p>";
        echo "<p>Diponibilite: " . $row['dispo_prod'] . "</p>";
        echo "<p>Categorie: " . $row['categorie'] . "</p>";
        echo "<p>Type: " . $row['typeTransaction'] . "</p>";
        echo "<p>Contact: " . $row['Contact'] . "</p>";
        echo "<p>Description: " . $row['description'] . "</p>";
        echo "<div class='button-container'>";
        echo "<form action='admin_edit2.php' method='post'>";
        echo "<input type='hidden' name='edit_id4' value='" . $row['ID_P'] . "'>";
        echo "<button name='edit_four' class='case'>MODIFIER</button>";
        echo "</form><br>";
        if ($row['typeTransaction'] == 'location') {
            echo "<form action='former.php' method='post'>";
            echo "<input type='hidden' name=''>";
            echo "<button type='submit' name='' class='btn'>LOUER</button>";
            echo "</form><br>";
        }
        echo "<form action='supprimerPF.php' method='post'>";
        echo "<input type='hidden' name='delete_id2' value='" . $row['ID_P'] . "'>";
        echo "<button type='submit' name='delete' class='last'>SUPPRIMER</button>";
        echo "</form>";
        if ($row['typeTransaction'] == 'location') {
            $sql_location = "SELECT * FROM `location`";
            $result_location = $conn->query($sql_location);
        if ($row = mysqli_fetch_assoc($result_location)) {
                echo "<form action='info.php' method='post'>";
                echo "<input type='hidden' name='info_id' value='" . $row['ID_L'] . "'>";
                echo "<button type='submit' name='' class='jst'>Info</button>";
                echo "</form><br>";
            }
        }
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "Aucun produit trouvée.";
} } else{ echo "aucun produit trouvee";}

$conn->close();
?>

</body>
</html>