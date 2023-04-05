<?php
$pseudo = 0;

$reponse = $_COOKIE['reponse'];

if(isset($_POST['pseudo'])) {
    $pseudo = $_POST['pseudo'];
}
if(isset($_POST['reponse'])) {
    $reponse += $_POST['reponse'];
    setcookie('reponse', $reponse);
}
if(isset($_POST['reponse2'])) {
    $reponse += $_POST['reponse2'];
    setcookie('reponse', $reponse);
}


if(isset($_POST['choix'])) {
    $reponse += $_POST['choix'];
    setcookie('reponse', $reponse);
}

if(isset($_POST['reponse4'])) {
    $reponse += $_POST['reponse4'];
    setcookie('reponse', $reponse);
}


if(isset($_POST['choix2'])) {
    $reponse += $_POST['choix2'];
    setcookie('reponse', $reponse);
}



if(isset($_POST['question_unique']) && $_POST['question_unique'] == "q") {
    header("Location: question1.html");
    exit();
}


if(isset($_POST['question_courante']) && $_POST['question_courante'] == "q1") {
    header("Location: question2.html");
    exit();
}

if(isset($_POST['question_courante']) && $_POST['question_courante'] == "q2") {
    header("Location: question3.html");
    exit();
}


if(isset($_POST['question_courante']) && $_POST['question_courante'] == "q3") {
    header("Location: question4.html");
    exit();
}


if(isset($_POST['question_courante']) && $_POST['question_courante'] == "q4") {
    header("Location: question5.html");
    exit();
}



if(isset($_POST['question_courante']) && $_POST['question_courante'] == "q5") {
    header("Location: resultat.php");
    exit();
}
?>
