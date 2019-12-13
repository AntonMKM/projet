<?php ob_start(); ?>
<div id="article">
<img class="picture2" src="public/img/<?= $myArticle->getImg() ?>">
<p> <?= $myArticle->getTitle() ?> </p>
<p> <?= $myArticle->getContent() ?> </p>
<span class="dateAuthor">Posté le <?= $myArticle->getDate() ?> par : <?= $myArticle->getAuthor() ?></span>
</div>
<p>Affichage des commentaires</p>
<p> <?= $myComments->getComment() ?>Commentaire</p>
<?php
$content= ob_get_clean();
require 'template.php';
?>
