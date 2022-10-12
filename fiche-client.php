<?php $nav_en_cours = 'client'; ?>
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
            <h4>Le client</h4>
                <div class="fiche">
                    <div class="row">
                    <p class="row-name">Nom du client</p>
                    <p>Entreprise</p>
                    </div>  
<hr>
                    <div class="row">
                    <p class="row-name">Adresse mail</p>
                    <p>djean@yahoo.fr</p>
                    </div>   
                    <hr>
                    <div class="row">
                    <p class="row-name">Téléphone</p>
                    <p>055765273</p>
                    </div>   
                    <hr>
                    
                    <div class="row">
                    <p class="row-name">Localisation</p>
                    <p>Bordeaux</p>
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