<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat de recherche !</title>

<style>
        .result {
  margin-top: 20px;
}

.titre {
  color: #333;
  font-size: 18px;
  font-weight: bold;
}

.result p {
  color: #666;
  font-size: 14px;
}



    </style>
</head>
<body>
<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "projet l3");

// Vérification de la connexion
if (!$conn) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}

// Récupération de la valeur de recherche
$recherche = $_GET['q'];

// Requête SQL pour rechercher les produits correspondants
$query = "SELECT * FROM article WHERE Libelle LIKE '%$recherche%'";
$resultat = mysqli_query($conn, $query);
?>
<!--Vérification des résultats
//if ($resultat && mysqli_num_rows($resultat) > 0) {
    // Affichage des produits correspondants--->
    <div class="container text-center " >    
  <h3>Produits de Cardio</h3><br>
  <div class="row" >
    <?php while ($produit = mysqli_fetch_assoc($resultat)) { ?>
      <div class="col-sm-3" >
        <img src="img<?php echo $produit['photo']; ?>" class="img-responsive" style="width:100%" alt="Image produit" >
        <p><?php echo $produit['Libelle']; ?></p>
        <p><?php echo $produit['prix']; ?></p>
        <a href="det_prod.php?id=<?php echo $produit['ID_P']  ;  ?>" class="btn-success" style="text-decoration:none; padding: 10px;  ">Voir details</a>
      </div>
    <?php } ?> 
  </div>
</div>
<br>
 
<!---} else {
    echo "Aucun résultat trouvé.";
//} -->



    
</body>
</html>
