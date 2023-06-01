<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/admin.css"/>
    <title>Admin Panel</title>
</head>
<body>
    
    <div class="side-menu">
        <div class="brand-name">
            <h1> Dashboard </h1>
        </div>
        <ul>
            <li><a href="adminC.php"><ion-icon name="person-outline"></ion-icon>&nbsp;Client</a></li>
            <li><a href="adminF.php"><ion-icon name="person-outline"></ion-icon>&nbsp;Fournisseur</a></li>
            <li><a href="adminP.php"><ion-icon name="person-outline"></ion-icon>&nbsp;Article</a></li>
            <li><a href="location.php"><ion-icon name="person-outline"></ion-icon>&nbsp;Location</a></li>

        </ul>
       
    </div>
    <div class="container">
        <div class="header">
                                          
         <h2> Panneau D'administration</h2>           

        </div>
        <div class="content">
           <div class="content-2">
              <div class="recent-payments">
                   <div class="title">
                        <h2> Article </h2>
                        
                    </div>
                    <?php
        $connection = mysqli_connect("localhost","root","","projet l3");

      
        $query = "SELECT * FROM article";
        $query_run = mysqli_query($connection, $query);
        
        ?>
            <table>
                <thead>
                    <tr>
                        <th>ID_P</th>
                        <th>Libelle</th>
                        <th>Disp P</th>
                        <th>Prix</th> 
                        <th>Categorie</th> 
                        <th>Type </th>
                        <th> Desc P</th>                       
                        <th>Contact</th> 
                        <th>MODIFIER</th>                    
                        <th>SUPPRIMER</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($query_run) > 0)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>
                       
                    <tr>                      
                     <td> <?php   echo $row['ID_P'];?></td>
                      <td> <?php   echo $row['Libelle'];?></td>
                      <td> <?php   echo $row['dispo_prod'];?></td>
                      <td> <?php   echo $row['prix'];?></td>                    
                      <td> <?php   echo $row['categorie'];?></td>
                      <td> <?php   echo $row['typeTransaction'];?></td>
                      <td> <?php   echo $row['description'];?></td>
                      <td> <?php   echo $row['Contact'];?></td>
                      <td> 
                        <form action="admin_edit2.php" method="post">
                            <input type="hidden" name="edit_id" value="<?php echo $row['ID_P']; ?>">
                            <button  name="edit_btn" class="case"> MODIFIER </button>
                        </form>
                      </td>
                      <td> 
                      <form action="supprimerP.php" method="post">
                               <input type="hidden" name="delete_id" value="<?php echo $row['ID_P']; ?>">
                               <button type="submit" name="delete_btn" class="card"> SUPPRIMER</button>
                      </form>
                        
                      </td> 
                        
                    </tr>
                    <?php 
                    }
                }
                else{
                    echo "No record Found" ;
                }
                ?> 
                    
                </tbody>
            </table>
        </div>
       
        
            </div>
        </div>

    </div>
    

  
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>