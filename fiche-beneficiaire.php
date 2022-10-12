<?php $nav_en_cours = 'beneficiaire'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bénéficiares - Fiche bénéficiaire</title>
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
                    <h4>Bénéficiaire</h4>
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
                <div class="fiche">
                    <div class="row">
                    <p class="row-name">Nom du client</p>
                    <p>Entreprise</p>
                    </div>  
<hr>
                    <div class="row">
                    <p class="row-name">Nom du bénéficiare</p>
                    <p>Jean TRUC</p>
                    </div>   
                    <hr>
                    <div class="row">
                    <p class="row-name">Nom du contrôleur</p>
                    <p>Richard</p>
                    </div>   
                    <hr>
                    <div class="row">
                        <p class="row-name">Spécialités</p>
                        <div class="speciality-tags">
                        <p class="tags">Spécialité 1</p>
                        <p class="tags">Spécialité 2</p>
                        <p class="tags">Spécialité 3</p>
</div>
                    </div>
                    <hr>
                    <div class="row">
                    <p class="row-name">Adresse mail du bénéficiaire</p>
                    <p>contact@entreprisemachinchouette.com</p>
                    </div>   
                    <hr>
                    <div class="row">
                    <p class="row-name">Téléphone du bénéficiaire</p>
                    <p>06 06 06 06 06</p>
                    </div>   
                    <hr>
                    <div class="row">
                    <p class="row-name">Adresse d'intervention</p>
                    <p>64, rue du Machin BORDEAUX 33000</p>
                    </div>   
                    <hr>
                    <div class="row">
                    <p class="row-name">Date du rendez-vous</p>
                    <p>17 Mai 2021 à 10H00</p>
                    </div>   
                    <hr>
                    <div class="row">
                    <p class="row-name">Résultat</p>
                    <p>En attente du rendez-vous</p>
                    </div> 
<br><br>
                    <button class="buttongreen">Modifier</button>  
                    
                </div>  

             </div>           
                      
               
            
            </div>

            
            
        </div>

    </div>

</body>

</html>