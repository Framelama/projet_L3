<?php
$host = 'localhost';
$dbname= 'projet l3';
$username= 'root';
$password = '';



try{
  $con = new PDO("mysql:host=$host; dbname=$dbname", $username, $password );
                  echo "connecte a la BD!";
                      }
                      catch (PDOException $e) {
                        die('Erreur : ' . $e->getMessage()) ;
                         }

if(isset($_POST['ok'])){
$username=$_POST['Email'];
$password=$_POST['mdp'];

if ($username == 'admin@gmail.com' && $password == '2806') {
  header('location: adminP.php');
} else {

$sql="SELECT * FROM client WHERE Email ='$username' AND mdp ='$password'";

$reponse = $con->query($sql);
if($reponse->rowCount()>0 ){
if($donnees = $reponse -> fetch()){

   header('location:new-indexC.php');

}
} else{
     
  header('location:connecterC.php');
  
  exit();
} 
}
}

$reponse->closeCursor();


?>