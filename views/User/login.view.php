<?php ob_start(); ?>
<link rel="stylesheet" href="public/asset/css/login.css">

<div class="login">
    <h3>Login</h3>
    <form method="POST" action="<?= URL ?>" enctype="multipart/form-data">
        <input type="text" name="id" placeholder="idPatient" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>


<?php
$content = ob_get_clean();
?>