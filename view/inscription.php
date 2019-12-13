<?php
$title = 'Inscription';
ob_start();
?>

<div class="form">
    <form action="index.php?action=inscription" method="post" enctype="multipart/form-data">

        <label for="pseudo">Pseudo</label>
        <input type="text" name="login"  required>
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="pass" required>
        <!-- <span onclick="showPassword('pass')" id="visible">afficher le mot de passe</span> -->
        <!-- <select>
            <option value="homme" name="sexe">homme</option>
            <option value="femme" name="sexe">femme</option>
        </select> -->
        <br><br>
        <input type="submit" name="inscription" value="inscription" class="button">

    </form>
</div>

<?php
$content = ob_get_clean();
require 'template.php';
?>