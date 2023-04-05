<?php 
    $reponse = $_COOKIE['reponse']; 
    //echo $_COOKIE['reponse']; 
    //echo $_POST['choix'] ; 
    

    $reponse += $_POST['choix2'] ; 
    



    setcookie('reponse', $reponse);

  if ($reponse > 6) {
    header("Location: resultat1.php"); // redirection vers resultat1.php si $reponse > 10
    exit(); // sortie du script pour éviter toute exécution supplémentaire
} else {
    header("Location: resultat2.php"); // redirection vers resultat2.php sinon
    exit(); // sortie du script pour éviter toute exécution supplémentaire
}
?>
<!DOCTYPE html>
<body>
<?php
// Afficher le résultat
echo "<p>Votre score est de " . $reponse . " points</p>";

// Supprimer le cookie pour nettoyer les données
//setcookie("reponse", "", time()-3600);

?>
</body>
</html> 