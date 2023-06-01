<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Détails du produit</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Ajoutez vos styles personnalisés ici */
    body{
        background: linear-gradient(to bottom, #20244f, #11133b);
        color: #fff;

    }

    .section-wrapper{
        border: 1px solid #ccc;
        padding: 20px;
        margin-bottom: 20px;
    }

    p{
      font-size: 16px;
      
    }
    
  </style>


</head>

<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="new-indexC.php">EcoSports</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="new-indexC.php">Home</a></li>
            <li><a href="ajouter2.php">Ajouter</a></li>
            <li><a href="toutP.php">Tout les produits</a></li>
          </ul>
         
        </div>
</nav>


<?php




// Vérifier si l'ID du produit est présent dans la requête GET
if (isset($_GET['id'])) {
  $id = $_GET['id'];
 //echo $id;
  // Connexion à la base de données
  $servername = 'localhost';
  $dbname = 'projet l3';
  $username = 'root';
  $password = '';

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Vérifier la connexion
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Récupérer les détails du produit
  $sql = "SELECT ID_P, Libelle, prix, photo, dispo_prod, categorie, typeTransaction, description, Contact  FROM article WHERE ID_P =$id";
  $result = $conn->query($sql);
  
  

  // Vérifier s'il y a des résultats
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row['ID_P'];
    $libelle = $row['Libelle'];
    $prix = $row['prix'];
    $photo = $row['photo'];
    $disponibilite = $row['dispo_prod'];
    $categorie = $row['categorie'];
    $typeTransaction = $row['typeTransaction'];
    $contact = $row['Contact'];
    $description = $row['description'];
  } else {
    // Gérer le cas où aucun produit n'est trouvé avec l'ID donné
    echo "Aucun produit trouvé.";
  }

  $conn->close();
} else {
  // Gérer le cas où l'ID du produit n'est pas présent dans la requête GET
  echo "ID du produit non spécifié.";
}
?>


<body>
  <div class="container">
    <h1>Détails du produit</h1>
    <div class="section-wrapper">

    

    <div class="row">
      <div class="col-md-6">
        <img src="img<?php echo $row['photo']; ?>" alt="Image du produit" class="img-responsive " style="height: 250px; width:400px;">
      </div>
      <div class="col-md-6">
        <h2><?php echo $libelle; ?></h2>
        <input type="hidden" value="<?php echo $row['ID_P']; ?>" >
        <p><strong>Disponibilité :</strong> <?php echo $row['dispo_prod']; ?></p>
        <p><strong>Prix :</strong> <?php echo $row['prix']; ?></p>
        <p><strong>Catégorie :</strong> <?php echo $row['categorie']; ?></p>
        <p><strong>Type de transaction :</strong> <?php echo $row['typeTransaction']; ?></p>
        <p><strong>Contact :</strong> <?php echo $row['Contact']; ?></p>
      </div>
    </div>
    </div>
    <div class="section-wrapper">
    <div class="row">
      <div class="col-md-12">
        <h3>Description du produit</h3>
        <p><?php echo $row['description']; ?></p>
      </div>
    </div>
    </div>
  </div>
  
</body>
</html>
