<?php
class ArticleController
{

    function getArticles()
    {
        $gestion = new ManageArticles();
        $myArticles = $gestion->getAllArticles();
        require 'view/homeView.php';
    }
    function sendArticle()
    {
        $gestion = new ManageArticles();
        $article = new Article($_POST);
        if (isset($_FILES['img']) and $_FILES['img']['error'] == 0) {
            if ($_FILES['img']['size'] <= 10000000) {
                $tabExt = pathinfo($_FILES['img']["name"]);
                $extension = $tabExt['extension'];
                $extensionGood = ['jpg', 'png', 'jpeg'];
                if (in_array($extension, $extensionGood)) {
                    $nomImg = $article->getTitle() . basename($_FILES['img']['name']);
                    move_uploaded_file($_FILES['img']['tmp_name'], 'public/img/' . $nomImg);
                    $article->setImg($nomImg);
                    $gestion->sendAllArticle($article);
                }
            }
        }

        header("location: index.php?action=accueil");
    }
    function getFullArticle()
    {
        $gestion = new ManageArticles();
        $myArticle = $gestion->oneFullArticle($id);
        require 'view/fullArticle.php';
    }
}
