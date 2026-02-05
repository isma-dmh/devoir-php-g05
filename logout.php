<?php

session_start();
$_SESSION["connected"]=false;
unset($_SESSION["name"], $_SESSION["operationCount"], $_SESSION["operation"]);

header("Location: ./");

?>