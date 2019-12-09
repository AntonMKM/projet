<?php
$title= 'Inscription';
ob_start();
?>

    <div class="form">
    <form action="index.php?action=inscription" method="post" enctype="multipart/form-data">
        
        <label for="pseudo">Pseudo</label>
        <input type="text" name="login" id="pseudo" class="form-control" placeholder="Entrez votre pseudo" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Entrez votre adresse email" required>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="pass" id="mdp" class="form-control" placeholder="Entrez votre mot de passe" required>
        <span onclick="showPassword('pass')" id="visible">afficher le mot de passe</span>
        <br><br>
        <input type="submit" name="inscription" value="inscription" class="button">
        
    </form>
</div>

<?php 
$content= ob_get_clean(); 
require 'template.php';
?>