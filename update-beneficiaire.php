<?php $nav_en_cours = 'beneficiaire'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bénéficiares - Modifier bénéficiaire</title>
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
                    <h4>Modification du bénéficiaire</h4>
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
                
                    <div class="update-container">
                        <h5>Les coordonnées</h5>
                            <div class="coordonnees">
                                <div class="div-coor">
                                        <p>Nom du client</p>
                                        <select>
                                            <option>Le client</option>
                                            <option>Jean Claude SARTHE</option>
                                            <option>Claude Pignon</option>
                                            <option>Charles Arthus</option>
                                        </select>
                                </div>
                                <div class="div-coor">
                                        <p>Numéro de téléphone du bénéficiaire</p>
                                        <select class="tel-select">
                                            <option>0000000000</option>
                                            <option>06 06 06 06 06</option>
                                            <option>07 07 07 07 07</option>
                                            <option>08 08 08 08 08</option>
                                        </select>
                                </div>
                                <div class="div-coor">
                                        <p>Nom du bénéficiaire</p>
                                        <select>
                                            <option>Le bénéficiaire</option>
                                            <option>Patrick Poivre</option>
                                            <option>Johann Cheksy</option>
                                            <option>Paul Paquot</option>
                                        </select>
                                </div>
                                <div class="a1">
                                    <p>Adresse du bénéficiaire</p>
                                    <input class="postal" type="text" placeholder="Adresse postale">
                                </div>
                                <div class="div-mail-benef">
                                    <p>Adresse mail du bénéficiaire</p>
                                    <input type="text" placeholder="Adresse mail">
                                </div>
                            </div> 


                            <div class="grid2">
                                <div class="department-intervention">
                                    <h5>Départements d'intervention</h5>
                                    <select>
                                        <option value="">Numéro de département </option>
                                        <option>33</option>
                                        <option>40</option>
                                        <option>47</option>
                                        <option>63</option>
                                        <option>64</option>
                                        <option>78</option>
                                        <option>92</option>
                                    </select>
                                </div>
                                <div class="speciality-control">
                                    <h5>Spécialité(s) contrôles CEE</h5>
                                    <select>
                                        <option value="">Type de spécialité</option>
                                        <option>Spécialité 1</option>
                                        <option>Spécialité 2</option>
                                    </select>
                                </div>
                            
                        </div>
                        <div class="rdv-container2">
                            <h5>Rendez-vous</h5>
                            <div class="fiche-rdv">
                                <div class="date">
                                    <p>Date</p>
                                    <input type="date">
                                </div>
                                <div class="date">
                                    <p>Heure</p>
                                    <input type="time">
                                </div>
                            </div>
                            <div class="statut-rdv">
                            <h5>Statut du rendez-vous</h5>
                            <select>
                                        <option value="">En attente du rendez-vous</option>
                                        <option>A confirmer</option>
                                        <option>A annuler</option>
                                    </select>
    
                            </div>
                            <button class="buttongreen"></button>
                        </div>
                 </div>
            </div>
        </div>
    </div>

</body>

</html>