<?php
ob_start();
$title = "page d'accueil";
?>
<!-- Formulaire d'ajout d'article -->
<?php if (isset($_SESSION['status']) and $_SESSION['status'] == 'admin') : ?>
    <h4>Ajouter un article</h4>
    <form action="index.php?action=sendArticle" method="post" enctype="multipart/form-data">
        <input id="title" type="text" name="title" placeholder="Titre de l'article">
        <br><br>
        <textarea name="content" id="content" rows="10" placeholder="Texte de l'article"></textarea>
        <br>
        <input type="file" name="img" id="img" accept=".png, .jpg, .jpeg" class="btn btn-orange" hidden>
        <label for="img" class="btn btn-orange"><span id="choix">Choisir une image</span><img src="public/img/add.png" id="preview" alt="Cliquer" /></label>
        <input type="submit" value="Envoi" name="send">
    </form>
<?php endif; ?>
<div>
    <!-- Affichage des articles -->
    <?php
    foreach ($myArticles as $article) {
        $date = new DateTime($article->getDate());
        $datenew = $date->format("d/m/Y H:i");
        ?>

        <div class="heightArticle">
            <h4 class="title"><?= $article->getTitle() ?></h4>
            <img class="picture" src="public/img/<?= $article->getImg() ?>">
            <p class="content"><?= $article->getContent() ?></p>
        </div>
        <div class="blocNext">
            <span><?= $datenew ?><?= $article->getAuthor() ?></span>
            <a href="">Lire la suite</a>
        </div>
        <hr>
    <?php } ?>
</div>

<?php $content = ob_get_clean();
require 'view/template.php'; ?>