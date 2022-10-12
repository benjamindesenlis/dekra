<?php $nav_en_cours = 'membre'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les clients - Ajouter un membre</title>
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
            <div class="title-and-button">
                    <h4>Ajout d'un membre</h4>
                    <div class="retour">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20">
                            <defs>
                                <style>
                                    .a {
                                        fill: #0d0d0d;
                                    }
                                </style>
                            </defs>
                            <path class="a" d="M12.793,2.293a1,1,0,0,1,1.414,0l3,3a1,1,0,0,1,0,1.414l-3,3a1,1,0,0,1-1.414-1.414L14.086,7H12.5A6.5,6.5,0,1,0,19,13.5a1,1,0,0,1,2,0A8.5,8.5,0,1,1,12.5,5h1.586L12.793,3.707A1,1,0,0,1,12.793,2.293Z" transform="translate(-4 -2)" />
                        </svg>
                        <button class="refresh" onclick="history.go(-1)">Retour</button>
                    </div>
                </div>
                    
                <div class="profil">
                    <div class="name">
                        <p>Nom</p>
                        <input type="text" placeholder="Nom">
                    </div>
                    <div class="region">
                        <p>Région</p>
                        <select>
                            <option class="tags">Région</option>
                            <option>Aquitaine</option>
                            <option>Corse</option>
                            <option>Bretagne</option>
                        </select>
                    </div>
                    <div class="mail">
                        <p>Adresse mail</p>
                        <input type="email" placeholder="manon@entreprise.com">
                    </div>
                    <div class="mdp">
                        <p>Mot de passe</p>
                        <input type="pasword">
                    </div>
                    <div class="telephone">
                        <p>Numéro de téléphone</p>
                        <input type="tel" placeholder="06 06 06 06 06">
                    </div>
                    <div class="mdp-confirm">
                        <p>Vérification du mot de passe</p>
                        <input type="pasword">
                    </div>
                   <div class="level">
                   <p>Niveau</p>
                        <select>
                            <option class="tags">Call center</option>
                            <option>Administrateur</option>
                            <option>Administrateur Région</option>
                            <option>Client</option>
                        </select>
                   </div>  
                   <div></div>                
                     <button class="buttongreen">Ajouter</button>
                </div>
            </div> 
            
        </div>

    </div>

</body>

</html>