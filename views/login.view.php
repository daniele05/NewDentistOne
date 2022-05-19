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


<h4>Bienvenue sur mon profil utilisateur</h4>

<form action="<?= URL ?>loginValidation" method="post">

    <p>Identité Dentiste: <input type="text" name="idDentiste" class="form-control"></p>
    <p>Mail: <input type="email" name="email" class="form-control"></p>
    <p>Mot de passe: <input type="password" name="password" class="form-control"></p>
    <p>Identité Soins Dentaires: <input type="number" name="idSoinsDentiste" class="form-control"></p>
    <p>Identité Rendez-vous: <input type="datetime" name="idrdv" class="form-control"></p>
    <p>Identité Ordonnance: <input type="number" name="idordonnance" class="form-control"></p>
    <br /><br />
    <input type="submit" name="ok" value="Envoyer" class="form-control">
</form>
<?php
}
?>








<?php
$content = ob_get_clean();
$titre = "login";
require "template.php";
?>