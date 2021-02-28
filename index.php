<?php
    require_once "Utils/utils.php";
    include_once "view/shared/header.php";
    require_once "controller/ContactController.php";

    $contactController = new ContactController();
    $contactController->viewManager();

    include_once "view/shared/footer.php";
?>