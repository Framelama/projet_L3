<?php
$connection = mysqli_connect("localhost","root","","projet l3");

if(isset($_POST['delete_btn']));
{
    $ID_C = $_POST['delete_id'];

    $query = "DELETE FROM client WHERE ID_C='$ID_C' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: adminC.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: adminC.php'); 
    }    
}
?>