<!-- Temporisation par le bais du buffer -->
<?php
ob_start();
?>
<?php
if (isset($_SESSION['login'])) {
    echo "<center><h4>Vous êtes connecté en tant que: " . $_SESSION['login'] . "</h4></center>";
} else {
?>
<p class="text-monospace m-3">ici ma page connexion utilisateur</p>



<form action="<?= URL ?>loginValidation" method="POST">
    <p>Identité Patient : <input type="number" name="idPatient" class="form-control"></p>
    <p>Mot de passe: <input type="password" name="password" class="form-control"></p>
    <br /></br>

    <input type="submit" name="ok" value="Envoyer" class="form-control">
</form>
<br />
<?php
}
?>

<?php
$content = ob_get_clean();
$titre = "myProfile";
require "template.php";
?>