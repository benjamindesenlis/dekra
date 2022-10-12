<?php $nav_en_cours = 'profil'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
    <link rel="stylesheet" href="./assets/style/root.css">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="main">

    <?php include 'php/navigation.php' ?>

        <div class="content">

            <div class="container">
                <h4>Votre profil</h4>
                    
                <div class="profil">
                        <div class="name">
                            <p>Nom</p>
                            <input type="text" placeholder="Manon">
                        </div>
                        <div class="mdp">
                            <p>Mot de passe</p>
                            <input type="password">
                        </div>
                        <div class="mail">
                            <p>Mot de passe</p>
                            <input type="email" placeholder="manon@entreprise.com">
                        </div>
                        <div class="mdp-confirm">
                            <p>Confirmation du mot de passe</p>
                            <input type="password">
                        </div>
                        <div class="level">
                            <p>Niveau</p>
                            <select>
                                <option value="" selected>Administrateur</option>
                                <option value="">Administrateur région</option>
                                <option value="">Client</option>
                                <option value="">Call-center</option>
                            </select>
                            <button class="buttongreen">Enregistrer</button>
                        </div>  
                </div>        
            </div>
        </div>

    </div>

</body>

</html>