<p class="mb-5 pb-5 text-primary">page de connexion</p>

<div>
    <?= Toolbox::afficherMessageAlerte() ?>
</div>
<div class="main-wrapper mb-4">

    <form method="POST" action="<?= URL ?>validation_login">
        <div class="form-cont-2">
            <p class="mb-2 pb-2">Login</p>
            <input type="text" name="login" id="login" />
        </div>
        <div class="form-cont-3">
            <div class="pass-cont">
                <p>Mot de passe</p>
                <input type="password" name="password" id="password" />
            </div>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Connexion</button>

    </form>
</div>