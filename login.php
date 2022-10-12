<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEKRA - Page de connexion</title>
    <link rel="stylesheet" href="./assets/style/root.css">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="./assets/style/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container-login">
        <div class="logo">
            <img src="./assets/img/MEDIUMLOGO.png" alt="LogoDekra">
        </div>

        <!-- Definir l'action et la méthode par rapport au back  -->
        <form action="">
            <input class="input-email" type="text" name="" placeholder="Email">
            <!-- Voir pour ajouter le SVG dans l'input -->
            <div class="input-password-container">
                <input class="input-password" type="password" name="" placeholder="Mot de passe">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="19" viewBox="0 0 27 19">
                    <defs>
                        <style>
                            .a {
                                fill: #4a4a49;
                            }
                        </style>
                    </defs>
                    <g transform="translate(-2 -5)">
                        <path class="a" d="M17.167,13.083A4.083,4.083,0,1,1,13.083,9,4.083,4.083,0,0,1,17.167,13.083Z" transform="translate(2.417 1.417)" />
                        <path class="a" d="M28.857,13.893C25.944,8.035,20.769,5,15.5,5S5.056,8.035,2.143,13.893a1.364,1.364,0,0,0,0,1.214C5.056,20.965,10.231,24,15.5,24s10.444-3.035,13.357-8.893A1.363,1.363,0,0,0,28.857,13.893ZM15.5,21.286c-4.008,0-8.1-2.2-10.625-6.786C7.4,9.914,11.492,7.714,15.5,7.714s8.1,2.2,10.625,6.786C23.6,19.086,19.508,21.286,15.5,21.286Z" />
                    </g>
                </svg>
            </div>

            <a href="#">Mot de passe oublié ?</a>
            <button class="buttongreen" type="submit">Se connecter</button>
        </form>
    </div>

</body>

</html>