<?php $nav_en_cours = 'client'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les clients - Ajouter un client</title>
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
                <h4>Modifier un client</h4>
                    
                <div class="profil">
                    <div class="name">
                        <p>Nom du client</p>
                        <input type="text" placeholder="Nom">
                    </div>
                    <div class="mail">
                        <p>Numéro de téléphone</p>
                        <input type="tel" placeholder="Numéro de téléphone">
                    </div>
                    <div class="mail">
                        <p>Adresse mail</p>
                        <input type="email" placeholder="manon@entreprise.com">
                    </div>
                    <div class="benef-select">
                        <p>Nom des bénéficiaires</p>
                        <select>
                            <option class="tags">Jean Michel Jarre</option>
                            <option>Jean Michel Machin</option>
                            <option>Jean Claude Van Dam</option>
                            <option>Jen charles Jacoswki</option>
                        </select>
                    </div>
                    <div>
                        <button class="buttongreen">Enregistrer</button>
                    </div>
                </div>
            </div> 
            
        </div>

    </div>

</body>

</html>