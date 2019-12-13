<?php

ob_start(); ?>

<p> <?= $myArticle->getTitle() ?> </p>
<p> <?= $myArticle->getContent() ?> </p>

<?php
$content= ob_get_clean();
require 'template.php';
?>
