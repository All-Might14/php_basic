<?php
require_once "../controller/RecycleBinController.php";
$controller = new RecycleBinController();
$controller -> restore($_GET["id"]);