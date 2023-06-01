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
            <form action="inscriptionC1.php" method="post" class="form1">
                <h1> inscrivez vous!</h1>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="Pseudo_C" required >
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
                    <ion-icon name='id-card-outline'></ion-icon>
                    <input type="" name="N_didentite" required >
                    <label for=""> N° D'identite</label>
                </div>
                <div class="inputbox">
                    <ion-icon name='phone-portrait-outline'></ion-icon>
                    <input type="" name="telephone" required >
                    <label for=""> N° telephone </label>
                </div>
                
                <button> S'inscrire </button> <br>
                <br>
            </form>
        </div>
    </div>
  </section>
   
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>