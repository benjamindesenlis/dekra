<?php $nav_en_cours = 'controleur'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bénéficiaires - Ajouter un lot</title>
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
                    <h4>Ajouter un lot de bénéfiaire</h4>
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
                    
                <div class="lot-controleur">
                   
                    <h3>Ajout d'un lot</h3> <br>
                    <label class="inputfile">
                        <input type="file" />
                       <span >+</span>
                    </label>
                    <p> Format fichier excel seulement</p> <br>
                  
                    <button class="buttongreen">Ajouter le lot</button>
                    
                </div>
            </div> 
            
        </div>

    </div>

</body>

</html>