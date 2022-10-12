<?php $nav_en_cours = 'membre'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les membres - Fiche membre</title>
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
            <h4>Membre</h4>
                <div class="fiche">
                    <div class="row">
                    <p class="row-name">Nom</p>
                    <p>Jean</p>
                    </div>  
<hr>
                    <div class="row">
                    <p class="row-name">Adresse mail</p>
                    <p>contact@entreprisemachin.com</p>
                    </div>   
                    <hr>
                    <div class="row">
                    <p class="row-name">Numéro de téléphone</p>
                    <p>06 06 06 06 06</p>
                    </div>   
                    <hr>
                    <div class="row">
                        <p class="row-name">Niveau</p>
                        <p>All center</p>
</div>
                    
                    <hr>
                    <div class="row">
                    <p class="row-name">Région</p>
                    <p>Nouvelle-Aquitaine</p>
                    </div>   
                    <hr>
                    <div class="row">
                    <p class="row-name">Mot de passe</p>
                    <p>**************</p>
                    </div>   
                   
<br><br> <br>
                    <button class="buttongreen">Modifier</button>  
                    
                </div>  

             </div>           
                      
               
            
            </div>

            
            
        </div>

    </div>

</body>

</html>