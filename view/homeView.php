<?php 
ob_start();
$title = "page d'accueil"; 
?>
<!-- Formulaire d'ajout d'article -->
<?php if(isset($_SESSION['status']) AND $_SESSION['status'] == 'admin'): ?>
<h4>Ajouter un article</h4>
<form action="index.php?action=sendArticle" method="post">
    <input type="text" name="title" placeholder="Titre de l'article">
        <br>
    <textarea name="content" id="" cols="40" rows="5" placeholder="Texte de l'article"></textarea>
        <br>
    <input type="submit" value="Envoi" name="send">
</form>
<?php endif; ?>
<div>
<!-- Affichage des articles -->
<?php 
    foreach($myArticles as $article){ 
        $date = new DateTime($article->getDate());
        $datenew = $date->format("d/m/Y H:i"); 
?>
<h4 class="title"><?= $article->getTitle() ?></h4>
<p><?= $article->getContent() ?></p>
<h4 class="title"><?=$article->getAuthor() ?></h4>
<p><?= $datenew ?></p>
<hr>
</div>
<?php } ?>

<?php $content = ob_get_clean();
require 'view/template.php'; ?>