<p class="mb-5 pb-5 text-primary">Création de compte</p>
<div>
    <?= Toolbox::afficherMessageAlerte() ?>
</div>
<div class="main-wrapper mb-4">
    <form method="POST" action="<?= URL ?>validation_creerCompte">
        <div class="form-cont-2">
            <p class="mb-2 pb-2">Login</p>
            <input type="text" name="login" id="login" required />
        </div>
        <div class="form-cont-3">
            <div class="pass-cont">
                <p>Mot de passe</p>
                <input type="password" name="password" id="password" required />
            </div>
        </div>
        <div class="form-cont-3">
            <div class="pass-cont">
                <p>Mail</p>
                <input type="mail" name="mail" id="mail" required />
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Créer !</button>
    </form>

</div>