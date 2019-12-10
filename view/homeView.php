<?php 

ob_start();
$title = "page d'accueil"; 

?>

<h1>Page d'accueil</h1>
<h4>Ajouter un article (ANTHO TA INTERET A PIGER !!!!!)</h4>
<form action="index.php?action=sendArticle" method="post">
<input type="text" name="title" placeholder="Entre un fking titre">
<br><br>
<textarea name="content" id="" cols="20" rows="5" placeholder="Entrez un fking cotenu"></textarea>
<br>
<input type="submit" value="Envoie-moi ces putains de données!" name="send">
</form>

<div class="contenu">
<h3>Liste des articles: </h3>

<?php 
foreach($myArticles as $article){ 
    $date = new DateTime($article->getDate());
    $datenew = $date->format("d/m/Y H:i");
    
?>
<h4 class="title"><?= $article->getTitle() ?></h4>
<p><?= $article->getContent() ?></p>
<h4 class="title"><?=$article->getAutor() ?></h4>


<p><?= $datenew ?></p>
<hr>
</div>
<?php } ?>

<?php $content = ob_get_clean();
require 'view/template.php'; ?>