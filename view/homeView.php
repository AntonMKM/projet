<?php require 'controller/articlesController.php'; ?>

<?php ob_start() ?>

<?php $title = "page d'accueil"; ?>
<?php $myArticle = getArticles(); ?>
<h1>Page d'accueil</h1>

<h4>Ajouter un article (ANTHO TA INTERET A PIGER !!!!!)</h4>
<form action="" method="post">

<input type="text" name="title" placeholder="Entre un fking titre">
<br><br>
<textarea name="content" id="" cols="20" rows="5" placeholder="Entrez un fking cotenu"></textarea>
<br>
<input type="submit" value="Envoie-moi ces putains de données!" name="send">

</form>

<div class="contenu">
<h3>Liste des articles: </h3>
<?php foreach($myArticle as $value => $index){ ?>
<h4 class="title"><?= $index->getTitle() ?>:</h4>
<p><?= $index->getContent() ?></p>

<?php 
$date = new DateTime($index->getDate());
$return = date_format($date, "d/m/Y H:m:s");
?>
<p class="date"><?= $return ?></p>
<hr>
</div>
<?php } ?>

<?php $body = ob_get_clean() ?>