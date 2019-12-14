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
        <textarea rows="2" cols="100" name="comment" placeholder="Votre commentaire"></textarea>
        <input type="submit" value="Envoi" name="send">
</form>
<h3>Commentaires de l'article</h3>

<?php foreach ($myComments as $comment) { ?>
        <p><?= $comment->getComment() ?></p>
        <p>Posté par <?= $comment->getLogin() ?> le <?= $comment->getDate_comment() ?></p>


        <br>
        <hr>
<?php }
$content = ob_get_clean();
require 'template.php';
?>