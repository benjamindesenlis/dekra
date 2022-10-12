<?php $nav_en_cours = 'beneficiaire'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bénéficiaires - Ajouter un rendez-vous</title>
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
            <div class="rdv-container">
            <div class="title-and-button">
                    <h4>Ajout d'un rendez-vous</h4>
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
                <div class="control-benef">

                <div class="controleur-select-container">
                
                  <div class="controleur-select">
                        <h5>Sélectionner un contrôleur</h5>
                                <div class="list-controleur">

                                    <div class="controleur">
                                        <div class="checkbox"><input type="checkbox"></div>
                                        <div class="controleur-profil">
                                            <p class="controleur-name">Yves LACOUR</p> <br>
                                            <div class="department">
                                                <p>Département</p> 
                                                <div class="speciality-tags">
                                                <p class="tags">33</p>
</div>
                                            </div> <br>
                                            <div class="speciality">
                                                <p>Spécialités</p>

                                                <div class="speciality-tags">
                        <p class="tags">Spécialité 1</p>
                        <p class="tags">Spécialité 2</p>
         
</div>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <hr> <br>
                                    <div class="controleur">
                                        <div class="checkbox"><input type="checkbox"></div>
                                        <div class="controleur-profil">
                                            <p class="controleur-name">Sophie SEGUIN</p> <br>
                                            <div class="department">
                                                <p>Département</p> 
                                                <div class="speciality-tags">
                                                <p class="tags">33</p>
                                                <p class="tags">64</p>
</div>
                                            </div> <br>
                                            <div class="speciality">
                                                <p>Spécialités</p>

                                                <div class="speciality-tags">
                        <p class="tags">Spécialité 1</p>
         
</div>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <hr> <br>
                                    <div class="controleur">
                                        <div class="checkbox"><input type="checkbox"></div>
                                        <div class="controleur-profil">
                                            <p class="controleur-name">Jean-Phillipe MARTIN</p> <br>
                                            <div class="department">
                                                <p>Département</p> 
                                                <div class="speciality-tags">
                                                <p class="tags">33</p>
                                                <p class="tags">64</p>
</div>
                                            </div> <br>
                                            <div class="speciality">
                                                <p>Spécialités</p>

                                                <div class="speciality-tags">
                        <p class="tags">Spécialité 1</p>
                        <p class="tags">Spécialité 2</p>
         
</div>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <hr> <br>
                                    <div class="controleur">
                                        <div class="checkbox"><input type="checkbox"></div>
                                        <div class="controleur-profil">
                                            <p class="controleur-name">Yves LACOUR</p> <br>
                                            <div class="department">
                                                <p>Département</p> 
                                                <div class="speciality-tags">
                                            
                                                <p class="tags">64</p>
</div>
                                            </div> <br>
                                            <div class="speciality">
                                                <p>Spécialités</p>

                                                <div class="speciality-tags">
                        <p class="tags">Spécialité 1</p>
                        <p class="tags">Spécialité 2</p>
         
</div>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <hr>

                                       </div>
                </div>     
            </div>  <div class="fiche-beneficiaire-container">
      <h5>Le bénéficiaire</h5>
      <div class="fiche-beneficiaire"></div>
                    
                    <div class="fiche-benef-rdv">
                    <div class="row">
                    <p class="row-name">Nom du client</p>
                    <p>Entreprise</p>
                    </div> <br> 
<hr> <br>
                    <div class="row">
                    <p class="row-name">Nom du bénéficiare</p>
                    <p>Jean TRUC</p>
                    </div>   <br> 
                    <hr> <br>
                    <div class="row">
                    <p class="row-name">Numéro de téléphone</p>
                    <p>06 06 06 06 06</p>
                    </div>   <br> 
                    <hr> <br>
                    <div class="row">
                        <p class="row-name">Adresse mail</p>
                        <p>richard@maildubeneficiare.com</p>
                    </div> <br>
                    <!-- </div> -->
                    <hr> <br>
                    <div class="row">
                    <p class="row-name">Spécialités</p>
                    <p>Spécialité 1</p>
                    </div> <br>  
                    <hr> <br>
                    <div class="row">
                    <p class="row-name">Département</p>
                    <p>33</p>
                    </div>   <br> 
                    <hr> <br>
                    <div class="row">
                    <p class="row-name">Adresse</p>
                    <p>64, rue du Machin BORDEAUX 33000</p>
                    </div>    <br>
                    <hr> <br>
                    
                </div>  
                </div>   
</div> 
                </div>
            </div>
        </div>

    </div>

</body>

</html>