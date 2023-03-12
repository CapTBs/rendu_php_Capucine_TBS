<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Connexion</h2>
    <form action= "suite_connexion.php" method="POST">
        
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom">
        
        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo" id="pseudo">

        <label for="password">Password :</label>
        <input type="password" name="password" id="password">

        <label for="email">Email :</label>
        <input type="email" name="email" id="email">

        <label for="photo">Photo :</label>
        <input type="text" name="photo" id="photo">


        <input type="submit" value="Envoyer">
    </form>
</body>
</html>