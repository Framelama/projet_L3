<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" />
   
    <title>Tout les produit</title>
    
    
    
   
    <style> 
        form{
        text-align: center; 
        padding: 2px 5px;
        display: inline-block;
        margin-right: 10px;
     
        }
    .row{
        text-align: center; 
        padding: 5px 10px;
    }
    .card-body{
       border: 1px solid black; 
        padding: 5px 10px;  
        height: 320px;
        margin-bottom: 8px;
    }
    button{  
    border: none;
    border-radius: 6px;
    cursor: pointer;   
    word-break: break-all;
    text-align: center;
    padding: 10px 10px ;
    background: #0298cf;
    color: white;
    }
      
     
        
    
      
       
    </style>    
</head>
<body>
   
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="new-index.php">EcoSport</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="new-index.php">Home</a></li>
                <li><a href="ajouter2.php">Ajouter</a></li>
                <li><a href="toutPU.php">TOUT LES PRODUITS</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="user.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            </div>
        </nav>  
    
  
  
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
$sql = "SELECT ID_P, Libelle, prix, photo FROM article  ";
$result = $conn->query($sql);




?>
  
   
  
   <div class="row" >
    <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="card mb-3 col-md-2">
      
        <div class="card-body">
        <img src="img<?php echo $row['photo']; ?>" class="img-responsive" style="height:200px" >
        <h5>Libelle: <?php echo $row['Libelle']; ?></h5>
        <p>Prix: <?php echo $row['prix']; ?> Dz</p>
        <a href="det_prodU.php?id=<?php echo $row['ID_P'] ; ?>" class="btn_succes" style="text-decoration">
        <input type="hidden" name="id" value="">  
        <button > Voir details </button> <br>
        </div>
      </div>
    <?php } ?> </a>
  </div>
  </div>
<br>
    
  


</body>
</html>