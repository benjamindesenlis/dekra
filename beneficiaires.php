<?php $nav_en_cours = 'beneficiaire'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEKRA - Les bénéficiaires</title>
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
 <h4>Les bénéficiaires</h4>
                <div class="search-container">

                    <div class="search-input">

                        <svg class="iconsearch" xmlns="http://www.w3.org/2000/svg" width="53" height="43"
                            viewBox="0 0 23.414 24.414">
                            <defs>
                                <style>
                                    .a,
                                    .c {
                                        fill: white;
                                    }

                                    .a {
                                        stroke: #000;
                                        stroke-linecap: round;
                                        stroke-width: 2px;
                                    }

                                    .b {
                                        stroke: none;
                                    }
                                </style>
                            </defs>
                            <g transform="translate(-559 -341.469)">
                                <g class="a" transform="translate(559 341.469)">
                                    <ellipse class="b" cx="8.767" cy="8.767" rx="8.767" ry="8.767" />
                                    <ellipse class="c" cx="8.767" cy="8.767" rx="7.767" ry="7.767" />
                                </g>
                                <path class="a" d="M12333.379,179.471l-8.019-8.085"
                                    transform="translate(-11752.379 184.998)" />
                            </g>
                        </svg>
                        <input type="search" placeholder="Rechercher un bénéficiaire">
                    </div>
                    <div class="delete">

                        <div class="delicon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <defs>
                                    <style>
                                        .a {
                                            fill: #0d0d0d;
                                        }
                                    </style>
                                </defs>
                                <path
                                    d="M7,4A2,2,0,0,1,9,2h6a2,2,0,0,1,2,2V6h4a1,1,0,0,1,0,2H19.931l-.867,12.142A2,2,0,0,1,17.069,22H6.931a2,2,0,0,1-1.995-1.858L4.069,8H3A1,1,0,0,1,3,6H7ZM9,6h6V4H9ZM6.074,8l.857,12H17.069l.857-12ZM10,10a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,10,10Zm4,0a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,14,10Z"
                                    transform="translate(-2 -2)" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="table">
                    <table>
                        <tr class="table-title">
                            <th class="table-title-check"> <input type="checkbox"></th>
                            <th class="table-title-name">Bénéficiaires</th>
                            <th class="table-title-client">Client</th>
                            <th class="table-title-rdv">Rendez-vous</th>
                            <th class="table-title-statut">Statut</th>
                        </tr>
                        <tr>
                            <td class="table-check"> <input type="checkbox"></td>
                            <td class="table-name">Nicolas TRUC</td>
                            <td class="table-client">L'entreprise bidule</td>
                            <td class="table-rdv">7 Juillet 2021 09:45</td>
                            <td class="table-statut-ok">
                                <p>Contrôlé</p>
                            </td>
                        </tr>
                        <tr>
                        <td class="table-check"> <input type="checkbox"></td>   
                        <td class="table-name">Martine LAGARDE</td>
                            <td class="table-client">L'entreprise machin chouette</td>
                            <td class="table-rdv">20 Juin 2021 09:45</td>
                            <td class="table-statut-wait">
                                <p>En attente</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-check"> <input type="checkbox"></td>
                            <td class="table-name">Marie SIMONEK</td>
                            <td class="table-client">Fenêtre et volets</td>
                            <td class="table-rdv">17 Juillet 2021 09:45</td>
                            <td class="table-statut-ok">
                                <p>Contrôlé</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-check"> <input type="checkbox"></td>
                            <td class="table-name">Barbara PARGADE</td>
                            <td class="table-client">La cabane à vitre</td>
                            <td class="table-rdv">2 Juillet 2021 09:45</td>
                            <td class="table-statut-ok">
                                <p>Contrôlé</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-check"> <input type="checkbox"></td>
                            <td class="table-name">Baptiste ORDONNEAU</td>
                            <td class="table-client">L'entreprise Henry Michel</td>
                            <td class="table-rdv">23 Juillet 2021 09:45</td>
                            <td class="table-statut-wait">
                                <p>En attente</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-check"> <input type="checkbox"></td>
                            <td class="table-name">Sophie TRUDEAU</td>
                            <td class="table-client">L'entreprise poouet pouet</td>
                            <td class="table-rdv">11 Juillet 2021 09:45</td>
                            <td class="table-statut-wait">
                                <p>En attente</p>
                            </td>
                        </tr>



                    </table>
                </div>
                <div class="pagination">
                    <div class="affichage-page">
                        Page 1 sur 6
                    </div>
                    <div class="icones-page">
                        <div class="precedent"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14"
                                viewBox="0 0 8 14">
                                <path
                                    d="M.293,7.707a1,1,0,0,0,1.414,0L7,2.414l5.293,5.293a1,1,0,0,0,1.414-1.414l-6-6a1,1,0,0,0-1.414,0l-6,6A1,1,0,0,0,.293,7.707Z"
                                    transform="translate(0 14) rotate(-90)" />
                            </svg></div>
                        <div class="suivant"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="14"
                                viewBox="0 0 8 14">
                                <defs>
                                    <style>
                                        .a {
                                            fill: #0d0d0d;
                                        }
                                    </style>
                                </defs>
                                <path
                                    d="M5.293,9.293a1,1,0,0,1,1.414,0L12,14.586l5.293-5.293a1,1,0,0,1,1.414,1.414l-6,6a1,1,0,0,1-1.414,0l-6-6A1,1,0,0,1,5.293,9.293Z"
                                    transform="translate(-9 19) rotate(-90)" />
                            </svg></div>
                    </div>
                </div>
            </div>




      

        </div>      





    </div>  

            
            
      
    

</body>

</html>