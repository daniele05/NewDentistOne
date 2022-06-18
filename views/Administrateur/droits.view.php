<h4>Page de gestion de droits des utilisateurs</h4>
<table class="table">
    <thead>
        <tr>
            <th>Login</th>
            <th>Valide</th>
            <th>Rôle</th>

        </tr>
        <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $user["login"] ?>< /td>
            <td><?= $user["est_valide"] ?></td>
            <td>
                <?php if ($user['role'] === "administrateur") :  ?>

                <!-- // cas administrateur -->
                <?= $user['role'] ?>
                <!-- // cas user -->
                <?php else : ?>
                <div>
                    <?= Toolbox::afficherMessageAlerte() ?>
                </div>
                <form method="POST" action="<?= URL ?>administrateur/validation_modificationRole">
                    <!-- recup login et role -->
                    <!-- a recuperer pour le routeur le login admin -->
                    <input type="hidden" name="login" value="<?= $user['login'] ?>" />
                    <!-- // si role user liste deroulante -->
                    <select class="form-select" name="role"
                        onchange="confirm('Confirmez-vous la modification ?') ? submit():document.location.reload()">
                        <option value=" user <?= $user['role'] === "user" ? "selected" : "" ?>">Utilisateur</option>
                        <option value=" Suser <?= $user['role'] === "Suser" ? "selected" : "" ?>"">SuperUtilisateur</option>
                        <option value=" administrateur <?= $user['role'] === "100" ? "selected" : "" ?>"">
                            Administrateur
                        </option>

                    </select>
                    <?php endif; ?>
                </form>
            </td>

    </thead>

    <?php endforeach; ?>
</table>