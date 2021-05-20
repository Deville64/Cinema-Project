<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="<?= $router->generate('home'); ?>"><img src="./src/assets/image/logo.png" alt=""></a>

    <form action="" method="post">
        <h1>Inscription</h1>
        <div>
            <label for="firstName">Votre prénom</label>
            <input type="text" name="firstName" id="firstName">
        </div>

        <div>
            <label for="lastName">Votre nom</label>
            <input type="text" name="lastName" id="lastName">
        </div>

        <div>
            <label for="email">Adresse email</label>
            <input type="email" name="email" placeholder="Adresse email" id="email">
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe" id="password">
        </div>

        <div>
            <input type="submit" value="Inscription">
        </div>
    </form>

    <p>Déjà inscrit ? <a href="<?= $router->generate('login'); ?>">Connectez-vous</a></p>
</body>
</html>