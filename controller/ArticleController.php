<?php



class ArticleController  {

function getArticles(){
    $gestion = new ManageArticles();
    $myArticles=$gestion->getAllArticles();
    
    
    require 'view/homeView.php';
    
}

function sendArticle(){
    $gestion = new ManageArticles();
    $gestion->sendAllArticle($_POST);
    header("location: index.php?action=accueil");
}
}
?>