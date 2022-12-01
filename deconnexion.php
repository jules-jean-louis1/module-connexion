<?php

if (isset($_POST['deco'])) {
    session_destroy();
}

?>


<form action="" input="POST">
    <input type="submit" value="Deconnexion" name="deco" class="btn_co">
</form>