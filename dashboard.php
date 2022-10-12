<?php $nav_en_cours = 'dashboard'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - User</title>
    <link rel="stylesheet" href="./assets/style/root.css">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="./assets/style/dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="main">

    <?php include 'php/navigation.php' ?>

        <div class="content">

            <div class="welcome-container">
                <h4>Bienvenue, User !</h4>
                <p>Cet interface va vous permettre de rajouter, supprimer ou modifier des clients, des contrôleurs,
                    d'ajouter des membres et donner leur niveau d'accessibilité.</p>
                <div class="icones">
                    <div class="clients">
                        <svg class="center-icone" xmlns="http://www.w3.org/2000/svg" width="61" height="61"
                            viewBox="0 0 71 71">
                            <path fill="black"
                                d="M19.924,18.848A5.924,5.924,0,1,0,14,12.924,5.924,5.924,0,0,0,19.924,18.848Z"
                                transform="translate(29.378 8.774)" />
                            <path fill="black"
                                d="M3,10.889A7.889,7.889,0,0,1,10.889,3H66.111A7.889,7.889,0,0,1,74,10.889V66.111A7.889,7.889,0,0,1,66.111,74H10.889A7.889,7.889,0,0,1,3,66.111Zm63.111,0H10.889V42.127L24.2,31.475a3.945,3.945,0,0,1,4.928,0L46.1,45.048l5.392-5.392a3.945,3.945,0,0,1,5.578,0L66.111,48.7ZM10.889,66.111H66.111V59.856L54.278,48.023l-5.1,5.1a3.945,3.945,0,0,1-5.253.291L26.667,39.607,10.889,52.229Z"
                                transform="translate(-3 -3)" />
                        </svg>

                        <a href="./clients.php">Voir les clients</a>
                    </div>
                    <div class="prestations">
                        <svg class="center-icone" xmlns="http://www.w3.org/2000/svg" width="61" height="61"
                            viewBox="0 0 71 71">
                            <path fill="black"
                                d="M55.433,4.155a3.944,3.944,0,0,1,5.578,0L72.845,15.989a3.945,3.945,0,0,1,0,5.578l-35.5,35.5a3.945,3.945,0,0,1-2.789,1.155H22.722a3.944,3.944,0,0,1-3.944-3.944V42.444a3.944,3.944,0,0,1,1.155-2.789ZM26.667,44.078v6.255h6.255L64.477,18.778l-6.255-6.255ZM3,18.778a7.889,7.889,0,0,1,7.889-7.889H30.611a3.944,3.944,0,1,1,0,7.889H10.889V66.111H58.222V46.389a3.944,3.944,0,0,1,7.889,0V66.111A7.889,7.889,0,0,1,58.222,74H10.889A7.889,7.889,0,0,1,3,66.111Z"
                                transform="translate(-3 -3)" />
                        </svg>
                        <a href="./controleurs.php">Voir les contrôleurs</a>
                    </div>
                    <div class="beneficiaires">
                        <svg class="center-icone" xmlns="http://www.w3.org/2000/svg" width="61" height="61"
                            viewBox="0 0 71 71">

                            <path fill="black"
                                d="M30.4,9.1A14.2,14.2,0,1,0,44.6,23.3,14.2,14.2,0,0,0,30.4,9.1ZM9.1,23.3A21.3,21.3,0,1,1,30.4,44.6,21.3,21.3,0,0,1,9.1,23.3ZM54.641,8.239a3.55,3.55,0,0,1,5.02,0,21.3,21.3,0,0,1,0,30.123,3.55,3.55,0,1,1-5.02-5.02,14.2,14.2,0,0,0,0-20.082A3.55,3.55,0,0,1,54.641,8.239Zm2.49,46.15a3.549,3.549,0,0,1,4.3-2.583,14.088,14.088,0,0,1,9.414,7.625A22.75,22.75,0,0,1,73,69.45a3.55,3.55,0,1,1-7.1,0,15.724,15.724,0,0,0-1.4-6.844,7.006,7.006,0,0,0-4.786-3.912A3.549,3.549,0,0,1,57.131,54.389ZM17.975,58.8C13.5,58.8,9.1,63.108,9.1,69.45a3.55,3.55,0,1,1-7.1,0C2,60.107,8.722,51.7,17.975,51.7h24.85c9.253,0,15.975,8.407,15.975,17.75a3.55,3.55,0,1,1-7.1,0c0-6.342-4.4-10.65-8.875-10.65Z"
                                transform="translate(-2 -2)" />
                        </svg>
                        <a href="./beneficiaires.php">Voir les bénéficiaires</a>
                    </div>

                    <!-- Division membres pour administrateur région -->
                    <!-- <div class="membres">
                        <svg class="center-icone" xmlns="http://www.w3.org/2000/svg" width="61" height="61"
                            viewBox="0 0 71 71">

                            <path fill="black"
                                d="M30.4,9.1A14.2,14.2,0,1,0,44.6,23.3,14.2,14.2,0,0,0,30.4,9.1ZM9.1,23.3A21.3,21.3,0,1,1,30.4,44.6,21.3,21.3,0,0,1,9.1,23.3ZM54.641,8.239a3.55,3.55,0,0,1,5.02,0,21.3,21.3,0,0,1,0,30.123,3.55,3.55,0,1,1-5.02-5.02,14.2,14.2,0,0,0,0-20.082A3.55,3.55,0,0,1,54.641,8.239Zm2.49,46.15a3.549,3.549,0,0,1,4.3-2.583,14.088,14.088,0,0,1,9.414,7.625A22.75,22.75,0,0,1,73,69.45a3.55,3.55,0,1,1-7.1,0,15.724,15.724,0,0,0-1.4-6.844,7.006,7.006,0,0,0-4.786-3.912A3.549,3.549,0,0,1,57.131,54.389ZM17.975,58.8C13.5,58.8,9.1,63.108,9.1,69.45a3.55,3.55,0,1,1-7.1,0C2,60.107,8.722,51.7,17.975,51.7h24.85c9.253,0,15.975,8.407,15.975,17.75a3.55,3.55,0,1,1-7.1,0c0-6.342-4.4-10.65-8.875-10.65Z"
                                transform="translate(-2 -2)" />
                        </svg>
                        <a href="">Voir les membres</a>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</body>

</html>