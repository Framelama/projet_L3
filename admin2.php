<?php

session_start();

$connection = mysqli_connect("localhost","root","","projet l3");
if(isset($_POST['edit_btn']));
{
    $ID_P = $_POST['edit_id2'];
    $nomProduit  = $_POST['edit_libelle'];
    $dispo  = $_POST['edit_dispo'];
    $prix  = $_POST['edit_prix'];
    //$categorie = $_POST['edit_categorie'];
    //$typeTransaction = $_POST['edit_typeTransaction'];
    $contact= $_POST['edit_contact'];
    //$description= $_POST['edit_description'];
    $query = "UPDATE article SET Libelle='$nomProduit', dispo_prod='$dispo' , prix=$prix,   Contact=$contact  WHERE ID_P='$ID_P' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";       
        header('location: adminP.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('location: adminP.php'); 
    }
}
?>