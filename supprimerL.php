<?php
$connection = mysqli_connect("localhost","root","","projet l3");
if(isset($_POST['delete_btn']));

{
    $ID_L = $_POST['delete_id'];

    $query = "DELETE FROM location WHERE ID_L='$ID_L' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: location.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: location.php'); 
    }    
}






?>