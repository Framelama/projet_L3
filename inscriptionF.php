<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/inscription.css">
    <title>Inscription !</title>
</head>
<body>
  <section>
    <div class="form-box">
        <div class="form-value">
            <form action="inscriptionF1.php" method="post" class="form1">
                <h1> inscrivez vous!</h1>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="Pseudo_F" required >
                    <label for=""> Pseudo </label>
                </div>
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
               
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="text" name="code" required >
                    <label for="">  Code </label>
                </div>
                <div class="inputbox">
                    <ion-icon name="location-outline"></ion-icon>
                    <input type="text" name="adresse" required >
                    <label for=""> Adresse </label>
                </div>
               
               
                <button> S'inscrire </button> <br>
                
            </form>
        </div>
    </div>
  </section>
 
               
        




   
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>