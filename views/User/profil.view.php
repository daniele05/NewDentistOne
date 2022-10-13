<div class="text-align-center">

    <h4 class="text-monospace text-primary m-4">Profil <?= $user["login"] ?></h4>

    <!-- Ajout image de profil  -->
    <div>
        <div>

            <img src="<?= URL; ?>public/asset/img/<?= $user["image"] ?>" width="100px" alt="photo de profil" />
        </div>
        <!--form permettant le changement d image par le user -->
        <form method="POST" action="<?= URL ?>compte/validation_modificationImage" enctype="multipart/form-data">
            <label for="image" class="text-primary">Changer l'image de profil</label> <br />
            <input type="file" class="form-control-file" id="image" name="image" onchange="submit();" />
        </form> <br />
        <div id=" mail">
            Mail: <?= $user['mail'] ?>

            <button class=" btn btn-primary" id="btnModifMail">
                <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil"
                    viewBox="0 0 16 16">
                    <path
                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
            </button><br />

            <br>

            <!-- action modifMailpour cacher lela divpar rapport a mon js -->

            <div id="modificationMail" class="d-none">
                <!-- d-none permet de cacher le formulaire a remplir -->

                <!-- fonction js dans usercontrioller -->
                <form method="POST" action="<?= URL ?>compte/validation_modificationMail">

                    <div class="row">
                        <label for="mail" class="col-2 col-form-label">Mail</label>

                        <div class="col-8">
                            <input type="mail" class="form-control" name="mail" value="<?= $user['mail'] ?>" />
                        </div>
                        <div class="col-2">
                            <button class="btn btn-success" id="btnValidModifMail" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            <div>

                <a href="<?= URL ?>compte/modificationPassword" class="btn btn-warning">Changer le mot de passe</a>
            </div>
        </div>
    </div>