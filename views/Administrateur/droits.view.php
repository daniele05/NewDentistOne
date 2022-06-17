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
                <?php endif; ?>

                < /td>

    </thead>

    <?php endforeach; ?>
</table>