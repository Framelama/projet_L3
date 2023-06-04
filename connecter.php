<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/connexion.css">
    <title>Connexion</title>
</head>
<body>
   
   
  <section>
    <div class="form-box">
        <div class="form-value">
            <form action="connexion1.php" method="post"  class="elevated rounded mt-5">
                <h1> Connectez vous!</h1>
                <a href=""></a>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="Email" required >
                    <label for=""> Email </label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="mdp" required >
                    <label for=""> Mot de passe </label>
                </div>
                
                <button  name="ok" > Connecter </button> <br>
                <div class="register">
                    <p>Vous n'avez pas de compte <a href="inscriptionF.php"> inscription </a></p>

                </div>
            </form>
            
        </div>
    </div>
  </section>
    
                   




   
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>