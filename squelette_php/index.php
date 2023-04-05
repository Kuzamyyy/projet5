<?php
session_start();
$_SESSION['Username'] = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['Username']) && !empty($_POST['password'])) {
        // Le champ "nom" a été rempli
        $_SESSION['Username'] = $_POST['Username'];
        // Faites ici ce que vous voulez avec la variable $nom
        
        //Ouverture du fichier en mode écriture
        $file = fopen("base_de_donnee.csv", "a");
        fputcsv($file, array($_POST['Username'], $_POST['password']));
        
        //Fermeture du fichier
        fclose($file);
        header('Location: login.php');
        exit(); //On arrête l'exécution du script après la redirection
    } else {
        // Le champ "nom" n'a pas été rempli
        echo '<div style="color:red; text-align:center;">Veuillez completer tous les champs !</div>';
    }
}
?>

<link rel="stylesheet" href="sign-in.css">
<div class="loginBox">
    <img class="user" src="https://freepngimg.com/download/icon/1000546-detective-emoji-man-icon-download-free.png" height="100px" width="100px">
    <h3>S'enregistrer</h3>
    <form method="POST">
        <div class="inputBox">
            <input id="Username" type="text" name="Username" placeholder="Username">
            <input id="pass" type="password" name="password" placeholder="Password">
        </div>
        <input type="submit" name="envoi" value="S'enregistrer">
    </form>
    <a href="login.php">DEJA UN COMPTE ?</a>
</div>