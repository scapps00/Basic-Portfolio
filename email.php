<?php
if($_POST["message"]) {
    mail("scapps00@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>