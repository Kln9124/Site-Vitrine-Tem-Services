<?php

$bdd = new pdo ('mysql:host=localhost:8889; dbname=Livraison; charset=utf8','root','root');
if(isset($_POST['envoie'])){
    
    if(!empty($_POST['nomUtilisateur']) && !empty($_POST['mail']) && !empty($_POST['mdp']))
    {
 
        $nom_utilisateur = htmlspecialchars($_POST['nomUtilisateur']);
        $Email = htmlspecialchars($_POST['mail']);
        $mot_de_passe = $_POST['mdp'];
        $insertUser = $bdd->prepare('INSERT INTO utilisateur(Nom,Email ,Mdp)VALUES(?,?,?)');
        $insertUser->execute(array($nom_utilisateur,$Email ,$mot_de_passe));
    }
    header('location: ./connection.php');('location: ./inscription.php');

}