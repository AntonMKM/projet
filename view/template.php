<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
</head>

<body>
    <!--barre de navigation-->
    <div id="banner" style="user-select: none;">
        <img src="public/img/banner.png" alt="banner">
        <nav>

            <a style="text-decoration: none; color:white" class="buttonNav" href="index.php">Accueil</a>
            <a style="text-decoration: none; color:white" class="buttonNav" href="index.php?action=story">L'histoire</a>
            <a style="text-decoration: none; color:white" class="buttonNav" href="index.php?action=races">Races jouables</a>
            <?php if (!isset($_SESSION['id'])) : ?>
                <a style="text-decoration: none; color:white" class="buttonNav" href="index.php?action=signin">S'inscrire</a>
            <?php endif; ?>
            
            <?php if (isset($_SESSION['status']) and $_SESSION['status'] == 'admin') : ?>
                <a style="text-decoration: none; color:white" class="buttonNav" href="index.php?action=manage">Gestion</a>
            <?php endif; ?>
            <?php if (isset($_SESSION['id'])) : ?>
                <a style="text-decoration: none; color:white" class="buttonNav" href="index.php?action=deconnexion">Se déconnecter</a>
            <?php endif; ?>
            <?php if (!isset($_SESSION['id'])) : ?>
                <a style="text-decoration: none; color:white" class="buttonNav" href="index.php?action=connexion">Se connecter</a>
            <?php endif; ?>
        </nav>
    </div>
    <?php if (isset($_SESSION['login'])) echo 'Bienvenue ' . $_SESSION['login'] ?>
    <br><br>

    <?= $content ?>
</body>

</html>
<script type='text/javascript' src='../public/js/script.js'></script>