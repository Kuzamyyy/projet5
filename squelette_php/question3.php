<?php 
    $reponse = $_COOKIE['reponse']; 
    //echo $_COOKIE['reponse']; 

    
if (isset($_POST['reponse0'])) {
    $valeur = 0;
    //echo "\nLe bouton 1 a été cliqué et la valeur est $valeur.";
} elseif (isset($_POST['reponse1'])) {
    $valeur = 2;
    //echo "Le bouton 2 a été cliqué et la valeur est $valeur.";
} else {
    //echo "Aucun bouton cliqué.";
}
$reponse += $valeur ; 



    setcookie('reponse', $reponse);
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site test</title>

    <body style="background-color: Gray;">
    </body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Test de Pureté</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                </ul>
            </div>
        </div>
    </nav>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <CENTER>
        <form action="question4.php"method="post">
        </br>
    </br>
            <h1 class="white-text">A QUELLE FREQUENCE MENTEZ VOUS</h1>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <input type="hidden" name="question_courante" value="q3" />
        </br>
        </br>
    <select name="choix">
        <option value="4" >jamais</option>
        <option value="2" >parfois</option>
        <option value="0" >souvent</option>
      </select>
      <div class="checkbox-group">
  <label>
    <input type="checkbox" name="choix" value="2">
    <span class="checkmark"></span>
    PARFOIS
  </label>
  <label>
    <input type="checkbox" name="choix" value="4">
    <span class="checkmark"></span>
    JAMAIS
  </label>
  <label>
    <input type="checkbox" name="choix" value="0">
    <span class="checkmark"></span>
    SOUVENT
  </label>
</div>

      <input type="submit" class="btn btn-success" name="entré" value="envoyer"></button>
    </CENTER>
</form>
        


</body>
</html>
