<p class="mb-5 pb-5 text-primary">page de connexion</p>
<div><?= Toolbox::afficherMessageAlerte() ?></div>
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
            <input class="check" id="check-text" type="checkbox"></input>
            <label class="check-label" for="check-text">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
    <div class="float circle c-1"></div>
    <div class="float circle c-2"></div>
    <div class="float circle c-3"></div>
    <div class="float line l-1"></div>
    <div class="float line l-2"></div>
    <div class="float line l-3"></div>
</div>
<div class="main-wrapper2">
    <div class="border-line"></div>
</div>