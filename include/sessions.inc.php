<?php
@session_start();

function errorMessage() {
    if (isset($_SESSION["errorMessage"])) {
        $outputMessage = "<div class=\"alert alert-danger\">";
        $outputMessage .= htmlentities($_SESSION["errorMessage"]);
        $outputMessage .= "</div>";
        $_SESSION["errorMessage"] = null;
        return $outputMessage;
    }
}
function successMessage() {
    if (isset($_SESSION["successMessage"])) {
        $outputMessage = "<div class=\"alert alert-success\">";
        $outputMessage .= htmlentities($_SESSION["successMessage"]);
        $outputMessage .= "</div>";
        $_SESSION["successMessage"] = null;
        return $outputMessage;
    }
}

