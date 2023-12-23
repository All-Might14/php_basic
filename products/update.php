<?php
    require_once "../controller/ProductController.php";
    $controller = new ProductController();
    $controller->update($_GET["id"], $_POST);
