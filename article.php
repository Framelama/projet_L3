<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" />
    <style>
        body{

            background: linear-gradient(to bottom, #20244f, #11133b);
            

        }
        form {
        width: 600px;
        border: 1px solid #ccc;
        padding: 20px;
        max-width: 800px;
        margin: 0 auto;
        background-color: #f2f2f2;
        }

        form label {
        font-weight: bold;
        }

        form input[type="text"],
        form input[type="number"],
        form select,
        form textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-weight: bold;
        
        }

        form textarea {
        height: 100px;
        }

        form input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        form input[type="submit"]:hover {
        background-color: #45a049;
        }

        .date-input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }
    .input-pic{
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 5px;
        width: 100%;
        height: 150px;
        margin-bottom: 10px;

    }
    #photo{
        border: none;
    }

    #contact{
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-top: 7px;
        margin-bottom: 20px;
        padding: 5px;
        box-sizing: border-box;
        
    }
    .navbar {
    text-transform: uppercase;
    margin-bottom: 0;
    border-radius: 0;
  }



    </style>
    <title>Ajouter un produit</title>
</head>
<body>
       <nav class="navbar navbar-inverse">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="Fournisseur.php">ECOSPORT</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="Fournisseur.php">Consulter</a></li>
                <li><a href="article.php">Ajouter</a></li>
                <li><a href="toutPF.php">TOUT LES PRODUITS</a></li>
               
            </ul>
         
            </div>
        </nav>

    <form action="article2.php" method="POST" enctype="multipart/form-data">
    <label for="nomProduit">Libellé :</label>
    <input type="text" id="nomProduit" name="nomProduit" required><br>

    <label for="dispo">Disponibilite</label>
    <select id="dispo" name="dispo" required>
        <option value="disponible">Disponible</option>
        <option value="non-disponible">Non disponible</option>
    </select><br>
    

    <label for="prix">Prix :</label>
    <input type="number" value="0" id="prix" name="prix" required><br>

    <label for="categorie">Catégorie :</label>
    <select id="categorie" name="categorie" required>
        <option value="cardio">Cardio</option>
        <option value="muscu">Musculation</option>
    </select><br>

    <label for="typeTransaction">Type de transaction :</label>
    <select id="typeTransaction" name="typeTransaction" onchange="toggleDateFields()" required>
        <option value="vente">Vente</option>
        <option value="location">Location</option>
    </select><br>

    <label for="contact">Contact :</label>
    <input type="text" value="0" id="contact" name="contact" required><br>

    <label for="photo">Photo :</label>
    <input type="file" id="photo" name="photo" accept="image/*" /class="input-pic"/ onchange="previewImage(event)" required ><br>
    <img id="imagePreview" src="#" class="input-pic" alt="Aperçu de l'image" style="display: none; max-width: 200px; max-height: 200px;"><br>

    

    <label for="description">Description :</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>

   <!-- <div id="dateFields" style="display: none;" >
        <label for="dateDebut">Date de début :</label>
        <input type="date" id="dateDebut" name="dateDebut" class="date-input" required><br>

        <label for="dateFin">Date de fin :</label>
        <input type="date" id="dateFin" name="dateFin" class="date-input" required><br>
    </div>  -->

    <input type="submit" value="Ajouter l'article">
    </form>


   <!-- <script>
    function toggleDateFields() {
        var typeTransaction = document.getElementById("typeTransaction").value;
        var dateFields = document.getElementById("dateFields");

        if (typeTransaction === "location") {
            dateFields.style.display = "block";
        } else {
            dateFields.style.display = "none";
        }
    }
</script>  -->
<!-- script du preview de l'image-->
<script>
    function previewImage(event) {
        var input = event.target;
        var imagePreview = document.getElementById("imagePreview");

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = "block";
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            imagePreview.src = "#";
            imagePreview.style.display = "none";
        }
    }
</script>

    
</body>
</html>