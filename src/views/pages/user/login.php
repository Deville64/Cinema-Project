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
        <h1>Se connecter</h1>

        <div>
            <label for="email">Adresse email</label>
            <input type="email" name="email" placeholder="Adresse email" id="email">
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe" id="password">
        </div>

        <div>
            <input type="submit" value="Se connecter">
        </div>
    </form>

    <div>
        <a href="" title="Mot de passe oublié">Mot de passe oublié ?</a>
    </div>

    <p>Vous n'êtes pas inscrit ? <a href="<?= $router->generate('subscribe'); ?>">Créer un compte</a></p>
</body>
</html>