<?php

require "model/manageArticles.php";

$gestion = new manageArticles();

function getArticles(){
global $gestion;
return $gestion->getAllArticles();
}

function sendArticle($data){
    global $gestion;
    $gestion->sendAllArticle($data);
    header("location: index.php?action=accueil");
}
?>