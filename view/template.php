<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
</head>

<body>
    <!--barre de navigation-->
    <div id="banner">
        <img src="public/img/banner.png" alt="banner">
        <nav>

            <a class="button" href="index.php">Accueil</a>
            <a class="button" href="index.php?action=story">L'histoire</a>
            <a class="button" href="index.php?action=races">Races jouables</a>
            <a class="button" href="index.php?action=signin">S'inscrire</a>
            <?php if (isset($_SESSION['status']) and $_SESSION['status'] == 'admin') : ?>
                <a class="button" href="index.php?action=manage">Gestion</a>
            <?php endif; ?>
            <?php if (isset($_SESSION['id'])) : ?>
                <a class="button" href="index.php?action=deconnexion">Se déconnecter</a>
            <?php endif; ?>
            <?php if (!isset($_SESSION['id'])) : ?>
                <a class="button" href="index.php?action=connexion">Se connecter</a>
            <?php endif; ?>
        </nav>
    </div>
    <?= $content ?>
</body>

</html>
<script type='text/javascript' src='../public/js/script.js'></script>