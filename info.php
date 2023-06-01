<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <style>
            body{

            background: linear-gradient(to bottom, #20244f, #11133b);
            padding: 10px;
           
            }
            form {
            width: 600px;
            border: 1px solid #ccc;
            padding: 40px;
            max-width: 800px;
            margin: 0 auto;
            background-color: #f2f2f2;
            height: 525px;
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
            .btn{
            width: 80px;
            height: 40px;
            border-radius: 80px;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 300;
            background: #b90826;
            color: #fff;
            }

            .case{
                width: 100px;
                height: 40px;
                border-radius: 20px;
                border: none;
                outline: none;
                cursor: pointer;
                font-size: 1em;
                font-weight: 300;
                background: #0298cf;
                color: #fff;
            }
    </style>
</head>
<body>

<?php
 $connection = mysqli_connect("localhost","root","","projet l3");
 

     $ID_L = $_POST['info_id'];     
     
     $query = "SELECT * FROM location WHERE ID_L='$ID_L'";
     $query_run = mysqli_query($connection, $query);
        
     if(mysqli_num_rows($query_run) > 0)
    //$row=mysqli_fetch_array($query_run);
    foreach($query_run as $row)
    
        ?>
    
    <form action="" method="POST" >
    <input type="hidden" id="ID_L" name="info_id" value="<?php  echo $row['ID_L']?>" required><br>

    <label for="Libelle">Libellé :</label>
    <input type="text" id="Libelle" name="Libelle" value="<?php echo $row['Libelle']?>" required><br><br>

    <label for="Pseudo_C">Pseudo_C :</label>
    <input type="text" id="" name="Pseudo_C" value="<?php echo $row['Pseudo_C']?>" required><br><br>

    <label for="N_telephone">N° Telephone :</label>
    <input type="text" id="" name="N_telephone" value="<?php echo $row['N_telephone']?>" required><br><br>


    <label for="N_didentite">N° D'identite :</label>
    <input type="text" id="" name="N_didentite" value="<?php echo $row['N_didentite']?>"  required><br><br>

    <label for="date_debut">Date Debut :</label>
    <input type="text" id="" name="date_debut" value="<?php echo $row['Date_Debut']?>" required><br><br>

    <label for="date_routeur">Date Retour :</label>
    <input type="text" id="" name="date_routeur" value="<?php echo $row['Date_Fin']?>" required><br>
    <br>
   


    <button class="btn"> <a href="Fournisseur.php" class="btn btn-danger"> Retour</a> </button>
  




</body>
</html>