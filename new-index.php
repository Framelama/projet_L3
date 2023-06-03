



<!DOCTYPE html>
<html lang="en">
<head>
  <title>EcoSports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style\new-index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="new-index.php">EcoSports</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="new-index.php">Home</a></li>
            <li><a href="ajouter2.php">Ajouter</a></li>
            <li><a href="toutPU.php">Tout les produits</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="user1.php"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
            <li><a href="user.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
          </ul>
          
        </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img\welcome-to-our-new-website-529x269.jpg" sizes="auto" alt="Image">
        <div class="carousel-caption">
          <h3>WELCOME !</h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="img\nvimg.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

 <!-- La barre de recherche -->

<div class="container text-center">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-4">
      <form class="form-inline" action="recherche2.php" method="GET">
        <div class="search-bar">
        <i class="fa fa-search search-icon"></i>
          <input type="text" class="search-input" name="q" placeholder="Rechercher un produit"> 
          <button type="submit" class="search-button">Rechercher</button>
        </div>
        
      </form>
    </div>
  </div>
</div>


<!---- Partie affichage des produit de la base--->
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

// recuperer les donnees
$sqlmuscu = "SELECT ID_P, Libelle, prix, photo FROM article WHERE dispo_prod = 'disponible' AND categorie = 'muscu'";
$resultmuscu = $conn->query($sqlmuscu);




?>
  
<div class="container text-center " >    
  <h3>Produits de Musculation</h3><br>
  <div class="row" >
    <?php while ($row = $resultmuscu->fetch_assoc()) { ?>
      <div class="col-sm-3" >
        <img src="img<?php echo $row['photo']; ?>" class="img-responsive" style="width:100%" alt="Image produit" >
        <p><?php echo $row['Libelle']; ?></p>
        <p><?php echo $row['prix']; ?> Dz</p>
        <a href="det_prod.php?id=<?php echo $row['ID_P']  ;  ?>" class="btn-success" style="text-decoration:none; padding: 10px;  ">Voir details</a>
      </div>
    <?php } ?> 
  </div>
</div>
<br>

<!-- les produits cardio ---->

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

$sqlcardio = "SELECT ID_P, Libelle, prix, photo FROM article WHERE dispo_prod = 'disponible' AND categorie = 'cardio'";
$resultcardio = $conn->query($sqlcardio);




?>
  
<div class="container text-center " >    
  <h3>Produits de Cardio</h3><br>
  <div class="row" >
    <?php while ($row = $resultcardio->fetch_assoc()) { ?>
      <div class="col-sm-3" >
        
        <img src="img<?php echo $row['photo']; ?>" class="img-responsive" style="width:100%" alt="Image produit" >
        <p><?php echo $row['Libelle']; ?></p>
        <p><?php echo $row['prix']; ?> Dz</p>
        <a href="det_prod.php?id=<?php echo $row['ID_P']  ;  ?>" class="btn-success" style="text-decoration:none; padding: 10px;  ">Voir details</a>
      </div>
      
    <?php } ?> 
  </div>
</div>
<br>

<!--- le footer -->

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
