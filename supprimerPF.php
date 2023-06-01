<?php

$connection = mysqli_connect("localhost","root","","projet l3");

if(isset($_POST['delete']));
{
    $ID_P = $_POST['delete_id2'];

    $query = "DELETE FROM article WHERE ID_P='$ID_P' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: Fournisseur.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: Fournisseur.php'); 
    }    
}
?>