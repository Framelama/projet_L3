<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connectez vous !</title>
    <style>
        *{
  margin: 0;
  padding:0;
 font-family: 'poppins' , sans-serif;
}
section{       
     display: flex;
     justify-content: center;
     align-items: center;
     min-height: 100vh;
     width: 100%;
     background: #0d114f;
  
}

h1{
    font-size: 2.8em;
    color: burlywood;
    text-align: center;
    text-decoration:double;
}
button{
    width: 800px;
    height: 50px;
    border-radius: 40px;   
    font-size: 1em;
    font-weight: 600;
    color: #fff;
}
.case{
    background: #4444;
    font-size: 1.5em;
    color: burywood;   
}
.card{
    background: #444;
    font-size: 1.5em;
    color: white;
}



    

    </style>
</head>
<body>
    <section>
        <div class="form-box">
            <h1> Vous devez vous connecter pour </h1>
            <h1>     pouvoir ajouter ? </h1>
         
            <br><br> <br><br> <br><br>
           
            
           
            <form action="connecter.php" method="post">
                <button class="card">Fournisseur </button>
            </form>
        
         

       </div>
   </section>
</body>
</html>