<?php
session_start();
$langSelected = $_POST["language"];
if ($langSelected == "greek") {
    $_SESSION["language"] = "greek";
} else  {
    $_SESSION["language"] = "english";
}
?>
