<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/admin_edit2.css">
    <title></title>
</head>
<body>




<?php
 $connection = mysqli_connect("localhost","root","","projet l3");
 if(isset($_POST['edit_btn']))
 {
     $ID_P = $_POST['edit_id'];
     
     $query = "SELECT * FROM article WHERE ID_P='$ID_P'";
     $query_run = mysqli_query($connection, $query);
     
     if(mysqli_num_rows($query_run) > 0)
    //$row=mysqli_fetch_array($query_run);
    foreach($query_run as $row)
    {
        ?>
   
    
  
    <form action="admin2.php" method="post" >
    <input type="hidden" id="ID_P" name="edit_id2" value="<?php  echo $row['ID_P']?>" required><br>

        <label for="nomProduit">Libellé :</label>
        <input type="text" id="nomProduit" name="edit_libelle" value="<?php echo $row['Libelle']?>" required><br>

        <label for="dispo">Disponibilite :</label>
        <input type="text" id="dispo" name="edit_dispo" value="<?php echo $row['dispo_prod']?>" required><br>
        
        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="edit_prix" value="<?php echo $row['prix']?>" required><br>
        <label for="categorie">Catégorie :</label>
        
        <select id="categorie"  required>
        <?php 
            if ($row['categorie'] == 'Cardio') {?>
            //echo 'selected' ;       
            <option name="edit_categorie" value= "Cardio" >Cardio</option>
            <option name="edit_categorie" value= "Musculation"> Musculation</option>
            <?php }
            else{?>
                <option name="edit_categorie" value= "Musculation"> Musculation</option>
                <option name="edit_categorie" value= "Cardio" >Cardio</option>
            <?php }?>
    
        </select><br>

        <label for="typeTransaction" > Type de transaction :</label>   
        <select id="typeTransaction"  onchange="toggleDateFields()" required>
         <?php 
             if ($row['typeTransaction'] == 'vente') {?>
            <option name="edit_typeTransaction"  value= "vente" >Vente</option>
            <option name="edit_typeTransaction"  value= "location">Location</option>
          <?php } 
          else{?>
             <option name="edit_typeTransaction"  value= "location" >Location</option>
             <option name="edit_typeTransaction"  value= "vente">Vente</option>
           <?php }?>
        </select><br>

        <label for="contact">Contact :</label>
        <input type="text"  id="contact" name="edit_contact" value="<?php echo $row['Contact']?>" required><br>


        <label for="description">Description :</label><br>
        <textarea id="description" name="description"  required> <?php echo $row['description']?></textarea><br>
                <br>
                    
        <button class="btn"> <a href="adminP.php" class="btn btn-danger"> cancel</a> </button>
        <button type="submit" class="case" name ="updatebtn"> Update </button>
    </form>  
            <?php
    }
}


else(isset($_POST['edit_four']));
{
    $ID_P = $_POST['edit_id4'];
     
    $query = "SELECT * FROM article WHERE ID_P='$ID_P'";
    $query_run = mysqli_query($connection, $query);
    
    if(mysqli_num_rows($query_run) > 0)
   //$row=mysqli_fetch_array($query_run);
   foreach($query_run as $row)
   {
       ?>
  
   
 
   <form action="admin3.php" method="post" >
   <input type="hidden" id="ID_P" name="edit_id3" value="<?php  echo $row['ID_P']?>" required><br>

       <label for="nomProduit">Libellé :</label>
       <input type="text" id="nomProduit" name="edit_libelle" value="<?php echo $row['Libelle']?>" required><br>

       <label for="dispo">Disponibilite :</label>
       <input type="text" id="dispo" name="edit_dispo" value="<?php echo $row['dispo_prod']?>" required><br>
       
       <label for="prix">Prix :</label>
       <input type="number" id="prix" name="edit_prix" value="<?php echo $row['prix']?>" required><br>
       <label for="categorie">Catégorie :</label>
       
       <select id="categorie"  required>
       <?php 
           if ($row['categorie'] == 'Cardio') {?>
           //echo 'selected' ;       
           <option name="edit_categorie" value= "Cardio" >Cardio</option>
           <option name="edit_categorie" value= "Musculation"> Musculation</option>
           <?php }
           else{?>
               <option name="edit_categorie" value= "Musculation"> Musculation</option>
               <option name="edit_categorie" value= "Cardio" >Cardio</option>
           <?php }?>
   
       </select><br>

       <label for="typeTransaction" > Type de transaction :</label>   
       <select id="typeTransaction"  onchange="toggleDateFields()" required>
        <?php 
            if ($row['typeTransaction'] == 'vente') {?>
           <option name="edit_typeTransaction"  value= "vente" >Vente</option>
           <option name="edit_typeTransaction"  value= "location">Location</option>
         <?php } 
         else{?>
            <option name="edit_typeTransaction"  value= "location" >Location</option>
            <option name="edit_typeTransaction"  value= "vente">Vente</option>
          <?php }?>
       </select><br>

       <label for="contact">Contact :</label>
       <input type="text"  id="contact" name="edit_contact" value="<?php echo $row['Contact']?>" required><br>


       <label for="description">Description :</label><br>
       <textarea id="description" name="description"  required> <?php echo $row['description']?></textarea><br>
               <br>
                   
       <button class="btn"> <a href="adminP.php" class="btn btn-danger"> cancel</a> </button>
       <button type="submit" class="case" name ="updatebtn"> Update </button>
   </form>  
           <?php
   }
}


?>
                

        
               
        




   
        
</body>
</html>