<?php 
    $reponse = $_COOKIE['reponse']; 
    //echo $_COOKIE['reponse']; 
    //echo $_POST['choix'] ; 
    

    $reponse += $_POST['choix'] ; 
    



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
        <form action="question5.php"method="post">
        </br>
    </br>
            <h1 class="white-text">AVEZ VOUS DEJA TRICHER PENDANT UN EXAMEN ?</h1>
        </br>
    </br>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <input type="hidden" name="question_courante" value="q4" />
    <button class="btn btn-success" type="submit"  name="reponse0" value=0>Oui</button>
    <button class="btn btn-danger" type="submit"  name="reponse1" value=2>Non</button>
            </CENTER>
        


</body>
</html>
