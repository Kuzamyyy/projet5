<?php
//connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST['pseudo'];
    $password = $_POST['mdp'];

    if (empty($Username) || empty($password)) {
        echo '<div style="color:red; text-align:center;">Veuillez completer tous les champs !</div>';
    } else {
        $comptes = array_map('str_getcsv', file('base_de_donnee.csv'));
        $compte_bon = false;
        foreach ($comptes as $compte) {
            if ($compte[0] == $Username && $compte[1] == $password) {
                $compte_bon = true;
                break;
            }
        }

        if ($compte_bon) {
            setcookie('reponse' , 0) ; 
            header('Location: accueil.php');
            exit; // arr�ter l'ex�cution du script apr�s la redirection
        } else {
             echo '<div style="color:red; text-align:center;">Adresse mail ou mot de passe incorrect !</div>';
        }
    }
}
?>


<link rel="stylesheet" href="login.css">
<div class="loginBox">
    <img class="user" src="https://freepngimg.com/download/icon/1000546-detective-emoji-man-icon-download-free.png" height="100px" width="100px">
    <h3>Test de Purete</h3>
    <form action="login.php" method="post">
        <div class="inputBox"> <input id="uname" type="text" name="pseudo" placeholder="Username"> <input id="pass" type="password" name="mdp" placeholder="Password"> </div> <input type="submit" name="envoi" value="Login">
    </form>
    <a href="index.php">IDENTIFIANTS OUBLIES ?</a>
</div>