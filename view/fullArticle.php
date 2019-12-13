<?php ob_start(); $title = "News";?>

<div id="article">
<img class="picture2" src="public/img/<?= $myArticle->getImg() ?>">
<p> <?= $myArticle->getTitle() ?> </p>
<p> <?= $myArticle->getContent() ?> </p>
<span class="dateAuthor">Posté le <?= $myArticle->getDate() ?> par : <?= $myArticle->getAuthor() ?></span>
</div>
<hr>
<h3>Commentaires de l'article</h3>
<?php

    foreach ($myComments as $comment) {
        
        ?>
                
            <p><?= $comment->getComment() ?></p>
        </div>
        <br>
        <hr>
    <?php } ?>
<?php
$content= ob_get_clean();
require 'template.php';
?>
