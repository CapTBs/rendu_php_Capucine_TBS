<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="rechercher.php" method="GET">
        <input type="text" name="recherche" id="recherche">
        <input type="submit" value="Rechercher...">

    </form>
    <br>
    <form action="inserer.php" method="POST">

        <label for="content">Contenu: </label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>

        <input type="submit" value="Envoyer">

    </form>
    <?php
        require_once 'connexion.php';

        $requete = $database->prepare('SELECT * FROM articles ORDER BY date DESC');
        $requete->execute();

        $articles = $requete->fetchAll(PDO::FETCH_ASSOC);
        $requete2 = $database->prepare('SELECT photo FROM users WHERE id=1');

        $requete2->execute();
        $image = $requete2->fetchAll(PDO::FETCH_ASSOC)[0]['photo'];


        foreach($articles as $article) { ?>
            <div>
                <img src="<?php echo $image?>" alt="">
                <p><?php echo $article['content']; ?></p>
                <span><?php echo $article['date']; ?></span>
                <a href="supprimer.php?id=<?php echo $article['id']; ?>">Supprimer</a>
            </div>

        <?php    
        }
    ?>
</body>
</html>