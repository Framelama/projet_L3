<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style\new-index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Resultat de recherche !</title>
    
    
    
   
    <style> 
        form{
        text-align: center; 
        padding: 2px 5px;
        display: inline-block;
        margin-right: 10px;
     
        }
    .row{
        margin-top: 15px;
        text-align: center; 
        padding: 5px 10px;
    }
    .card-body{
       border: 1px solid black; 
        padding: 5px 10px;  
    }
      
     
        
    .row{
        text-align: center; 
        padding: 5px 10px;
    }
    .card-body{
       border: 2px solid black; 
        padding: 10px 10px;  
    }
      
      
       
    </style>    
</head>
<body>
   
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="new-index.php">EcoSPort</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="new-index.php">Home</a></li>
                <li><a href="#">Ajouter</a></li>
                <li><a href="#">TOUT LES PRODUITS</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
            </ul>
            </div>
        </nav>  

        



 <!-- La barre de recherche -->

<div class="container text-center">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-4">
      <form class="form-inline" action="recherche2.php" method="GET"> 
        <div class="search-bar">
        <i class="fa fa-search search-icon"></i>
          <input type="text" class="search-input" name="q" placeholder="Rechercher un produit"> <!-- "q" est le nom du paramètre qui sera envoyé dans la requête GET avec la valeur de la recherche -->
          <button type="submit" class="search-button">Rechercher</button>
        </div>
        
      </form>
    </div>
  </div>
</div>
    
  
  
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
  
   
  
   <div class="row" >
    <?php while ($produit = mysqli_fetch_assoc($resultat)) { ?>
        <div class=" col-sm-6 col-md-4 col-lg-3 col-12">
      
        <div class="card-body">
        <img src="img<?php echo $produit['photo']; ?>" class="img-responsive" style="width:200px" >
        <h5>Libelle: <?php echo $produit['Libelle']; ?></h5>
        <p>Prix: <?php echo $produit['prix']; ?> Dz</p>
        <a href="det_prod.php?id=<?php echo $produit['ID_P']  ;  ?>" class="btn-success" style="text-decoration:none; padding: 10px;  ">Voir details</a>
        </div>
      </div>
    <?php } ?>
  </div>
  </div>
<br>
    
  


    
</body>
</html>