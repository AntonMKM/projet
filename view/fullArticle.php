<?php ob_start();
$title = "News"; ?>

<!-- Affichage article entier -->
<div id="article">
        <img class="picture2" src="public/img/<?= $myArticle->getImg() ?>">
        <p> <?= $myArticle->getTitle() ?> </p>
        <p> <?= $myArticle->getContent() ?> </p>
        <span class="dateAuthor">Posté le <?= $myArticle->getDate() ?> par : <?= $myArticle->getAuthor() ?></span>
</div>
<hr>
<form action="#" method="POST">
        <textarea rows="3" cols="100" name="newComment">Votre commentaire</textarea>
</form>
<h3>Commentaires de l'article</h3>

<?php foreach ($myComments as $comment) { ?>
        <p><?= $comment->getComment() ?></p>
        <br>
        <hr>
<?php }
$content = ob_get_clean();
require 'template.php';
?>