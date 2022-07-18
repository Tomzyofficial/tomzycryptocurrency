<?php
session_start();

function errorMessage() {
    if (isset($_SESSION["errorMessage"])) {
        $outputMessage = "<div class=\"alert alert-danger\">";
        $outputMessage .= htmlentities($_SESSION["errorMessage"]);
        $outputMessage .= "</div>";
        $_SESSION["errorMessage"] = null;
        return $outputMessage;
    }
}
