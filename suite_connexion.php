<?php

    require_once 'connexion.php';

    if($_POST['nom'] != "" && $_POST['pseudo'] != '' && $_POST['password'] !=  '' && $_POST['email'] != '' && $_POST['photo'] != '') {

        $data = [
            'nom' => $_POST['nom'],
            'pseudo' => $_POST['pseudo'],
            'password' => password_hash ($_POST['password'], PASSWORD_DEFAULT),
            'email'=> $_POST['email'],
            'photo'=> $_POST['photo'],

        ];

        $requete = $database->prepare('INSERT INTO users (nom,pseudo,password,email,photo) VALUES (:nom, :pseudo, :password, :email, :photo )');
        $requete->execute($data);
    
        if($requete) {
        
            header('Location: index.php');

        } else {
            echo 'Une erreur est survenue';
        }

    } else {
        echo 'Veuillez remplir tous les champs';
    }

?>