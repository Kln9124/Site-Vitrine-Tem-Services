<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotheque</title>
    <link rel="stylesheet" href="index.css">
    
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Créer un compte</h2>
        </div>
        <form action="./test.php" class="form" id="form" method="post">
            <div class="form-control ">
                <label for="">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" placeholder="Ronasdev">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control ">
                <label for="">Email</label>
                <input type="email" id="email" name="email" placeholder="ronasdev@gmail.com">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Ronasdev">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            
            <input type="submit" name="envoie" value="s'inscrire"/> 
        </form>
    </div>
</body>
</html>