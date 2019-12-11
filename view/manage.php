<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
$title = 'Gestion';
ob_start();
?>

<form id='formModif' method="POST" enctype="multipart/form-data">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">pseudo</th>
                <th scope="col">email</th>
                <th scope="col">mot de passe</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($members as $member) : ?>

                <tr id="infos<?= $member->getId() ?>">
                    <td><?= $member->getId() ?></td>
                    <td id="login<?= $member->getId() ?>"><?= $member->getLogin() ?></td>
                    <td id="email<?= $member->getId() ?>"><?= $member->getEmail() ?></td>
                    <td id="pass<?= $member->getId() ?>"><?= $member->getPass() ?></td>
                    <td id="bouton<?= $member->getId() ?>"><span class="btn btn-success boutonModif" onclick="modif(<?= $member->getId() ?>)" value="<?= $member->getId() ?>">modifier</span></td>
                    <td><span onclick="confirmation(<?= $member->getId() ?>)" class="btn btn-danger">supprimer</span></td>

                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</form>
<?php
$content = ob_get_clean();
require 'template.php';
?>